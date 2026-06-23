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
        $packages = Package::orderBy('created_at', 'desc')->get();
        return $this->success($packages);
    }

    /**
     * POST /api/v1/sa/packages
     */
    public function store(PackageRequest $request)
    {
        // Log::info('package received', $request->all());

        $validated = $request->validated();

        $packages = [
            [
                'name' => $validated['name'],
                'slug' => Str::slug($validated['name']),
                'description' => $validated['description'] ?? null,
                'price_monthly' => $validated['price_monthly'] ?? 0,
                'price_yearly' => $validated['price_yearly'] ?? 0,
                'modules' => $validated['modules'] ?? [],
                'limits' => $validated['limits'] ?? [],
                'integrations' => $validated['integrations'] ?? [],
                'is_active' => $validated['is_active'] ?? true,
            ]
        ];

        foreach ($packages as $package) {
            // Log::info('Creating package', $package);
            Package::create($package);
        }

        return (new PackageResource($package))
            ->additional([
                'success' => true,
                'message' => 'Package created successfully.'
            ]);
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

        return $this->success($package);
    }

    /**
     * PUT /api/v1/sa/packages/{id}
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $package = Package::find($id);

        if (!$package) {
            return $this->notFound('Package not found');
        }

        $validated = $request->validate([
            'name'           => 'required|string|max:100',
            'slug'           => 'nullable|string|max:100|unique:packages,slug,' . $id,
            'description'    => 'nullable|string',
            'price_monthly'  => 'required|numeric|min:0',
            'price_yearly'   => 'required|numeric|min:0',
            'modules'        => 'nullable|array',
            'limits'         => 'nullable|array',
            'integrations'   => 'nullable|array',
            'is_active'      => 'boolean',
        ]);

        $package->update($validated);

        return $this->success($package, 'Package updated successfully');
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
