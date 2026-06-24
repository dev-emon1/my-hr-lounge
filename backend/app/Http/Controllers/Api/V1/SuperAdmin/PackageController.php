<?php

namespace App\Http\Controllers\Api\V1\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Http\Resources\PackageResource;
use App\Models\Central\Package;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    use ApiResponse;

    /**
     * GET /api/v1/sa/packages
     */
    public function index(): JsonResponse
    {
        $packages = Package::latest()->get();

        return $this->success(
            PackageResource::collection($packages)
        );
    }

    /**
     * POST /api/v1/sa/packages
     */
    public function store(PackageRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $package = Package::create([
            'name'           => $validated['name'],
            'slug'           => Str::slug($validated['name']),
            'description'    => $validated['description'] ?? null,
            'price_monthly'  => $validated['price_monthly'] ?? 0,
            'price_yearly'   => $validated['price_yearly'] ?? 0,
            'modules'        => $validated['modules'] ?? [],
            'limits'         => $validated['limits'] ?? [],
            'integrations'   => $validated['integrations'] ?? [],
            'is_trial'       => $validated['is_trial'] ?? false,
            'trial_period'   => $validated['trial_period'] ?? null,
            'is_active'      => $validated['is_active'] ?? true,
        ]);

        return $this->created(
            new PackageResource($package),
            'Package created successfully.'
        );
    }

    /**
     * GET /api/v1/sa/packages/{id}
     */
    public function show(string $id): JsonResponse
    {
        $package = Package::find($id);

        if (!$package) {
            return $this->notFound('Package not found');
        }

        return $this->success(
            new PackageResource($package)
        );
    }

    /** 
     * PUT /api/v1/sa/packages/{id}
     */
    public function update(PackageRequest $request, Package $package): JsonResponse
    {
        $validated = $request->validated();

        $package->update([
            ...$validated,
            'slug' => $validated['slug'] ?? Str::slug($validated['name']),
        ]);

        return $this->success(
            new PackageResource($package->fresh()),
            'Package updated successfully'
        );
    }

    /**
     * DELETE /api/v1/sa/packages/{id}
     */
    public function destroy(string $id): JsonResponse
    {
        $package = Package::find($id);

        if (!$package) {
            return $this->notFound('Package not found');
        }

        // Active tenant আছে কিনা check করো
        if ($package->tenants()->count() > 0) {
            return $this->error(
                'Cannot delete package with active tenants',
                'PACKAGE_IN_USE',
                409
            );
        }

        $package->delete();

        return $this->success(null, 'Package deleted successfully');
    }
}
