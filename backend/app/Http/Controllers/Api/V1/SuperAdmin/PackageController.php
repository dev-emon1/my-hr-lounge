<?php

namespace App\Http\Controllers\Api\V1\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Http\Resources\LightPackageResource;
use App\Http\Resources\PackageResource;
use App\Models\Central\Package;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    use ApiResponse;

    /**
     * GET /api/v1/sa/packages
     * High traffic optimized with caching
     */
    public function index(Request $request): JsonResponse
    {
        $perPage = $request->integer('per_page', 20);
        $search  = $request->get('search');
        $status  = $request->get('status');
        $isTrial = $request->boolean('is_trial');

        // Generate stable cache key
        $cacheKey = 'packages:index:' . md5(
            ($search ?? '') .
                ($status ?? '') .
                $isTrial .
                $perPage .
                $request->get('page', 1) .
                $request->boolean('with_modules') .
                $request->boolean('with_limits') .
                $request->boolean('with_integrations') .
                $request->boolean('with_description')
        );

        $packages = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($request, $perPage) {

            $query = Package::query()
                ->select([
                    'id',
                    'name',
                    'slug',
                    'price_monthly',
                    'price_yearly',
                    'limits',
                    'is_trial',
                    'status',
                    'created_at'
                ])
                ->latest();

            // Search
            if ($request->filled('search')) {
                $query->search($request->search);
            }

            // Filters
            if ($request->filled('status')) {
                $query->where('status', $request->string('status'));
            }

            if ($request->filled('is_trial')) {
                $query->where('is_trial', $request->boolean('is_trial'));
            }

            // Load heavy fields only when requested
            if ($request->boolean('with_description')) {
                $query->addSelect('description');
            }
            if ($request->boolean('with_modules')) {
                $query->addSelect('modules');
            }
            if ($request->boolean('with_limits')) {
                $query->addSelect('limits');
            }
            if ($request->boolean('with_integrations')) {
                $query->addSelect('integrations');
            }

            return $query->paginate($perPage);
        });

        return $this->success(
            LightPackageResource::collection($packages),
            'Packages retrieved successfully'
        );
    }

    /**
     * POST /api/v1/sa/packages
     */
    public function store(PackageRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $package = Package::create([
            'name'          => $validated['name'],
            'slug'          => Str::slug($validated['name']),
            'description'   => $validated['description'] ?? null,
            'price_monthly' => $validated['price_monthly'] ?? 0,
            'price_yearly'  => $validated['price_yearly'] ?? 0,
            'modules'       => $validated['modules'] ?? [],
            'limits'        => $validated['limits'] ?? [],
            'integrations'  => $validated['integrations'] ?? [],
            'is_trial'      => $validated['is_trial'] ?? false,
            'trial_period'  => $validated['trial_period'] ?? null,
            'status'        => $validated['status'] ?? 'active',
        ]);

        $this->clearPackageCache();

        return $this->created(
            new PackageResource($package),
            'Package created successfully.'
        );
    }

    /**
     * GET /api/v1/sa/packages/{package}
     */
    public function show(Package $package): JsonResponse
    {
        return $this->success(
            new PackageResource($package)
        );
    }

    /**
     * PUT /api/v1/sa/packages/{package}
     */
    public function update(PackageRequest $request, Package $package): JsonResponse
    {
        $validated = $request->validated();

        $package->update([
            'name'          => $validated['name'],
            'slug'          => $validated['slug'] ?? Str::slug($validated['name']),
            'description'   => $validated['description'] ?? $package->description,
            'price_monthly' => $validated['price_monthly'] ?? $package->price_monthly,
            'price_yearly'  => $validated['price_yearly'] ?? $package->price_yearly,
            'modules'       => $validated['modules'] ?? $package->modules,
            'limits'        => $validated['limits'] ?? $package->limits,
            'integrations'  => $validated['integrations'] ?? $package->integrations,
            'is_trial'      => $validated['is_trial'] ?? $package->is_trial,
            'trial_period'  => $validated['trial_period'] ?? $package->trial_period,
            'status'        => $validated['status'] ?? $package->status,
        ]);

        $this->clearPackageCache();

        return $this->success(
            new PackageResource($package->fresh()),
            'Package updated successfully.'
        );
    }

    /**
     * DELETE /api/v1/sa/packages/{package}
     */
    public function destroy(Package $package): JsonResponse
    {
        if ($package->tenants()->count() > 0) {
            return $this->error(
                'Cannot delete package with active tenants',
                'PACKAGE_IN_USE',
                409
            );
        }

        $package->delete();

        $this->clearPackageCache();

        return $this->success(null, 'Package deleted successfully');
    }

    /**
     * PATCH /api/v1/sa/packages/{package}/status
     */
    public function status(Package $package, Request $request): JsonResponse
    {
        $validated = $request->validate([
            'status' => 'required|in:active,draft,archived,inactive',
        ]);

        $package->update(['status' => $validated['status']]);

        $this->clearPackageCache();

        return $this->success(
            new PackageResource($package->fresh()),
            'Package status updated successfully.'
        );
    }

    /**
     * Clear all package related cache
     */
    private function clearPackageCache(): void
    {
        Cache::flush();                    // Simple but effective
        // Or more targeted:
        // Cache::forget('packages:index:*'); // if using prefix
    }
}
