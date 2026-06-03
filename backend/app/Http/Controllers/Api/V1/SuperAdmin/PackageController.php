<?php

namespace App\Http\Controllers\Api\V1\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Central\Package;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:100',
            'slug'           => 'required|string|unique:packages,slug|max:50',
            'description'    => 'nullable|string',
            'price_monthly'  => 'nullable|numeric|min:0',
            'price_yearly'   => 'nullable|numeric|min:0',
            'max_employees'  => 'required|integer|min:1',
            'max_admins'     => 'required|integer|min:1',
            'features'       => 'required|array',
            'features.modules' => 'required|array',
            'is_active'      => 'boolean',
        ]);

        $package = Package::create($validated);

        return $this->created($package, 'Package created successfully');
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
            'name'             => 'sometimes|string|max:100',
            'description'      => 'nullable|string',
            'price_monthly'    => 'nullable|numeric|min:0',
            'price_yearly'     => 'nullable|numeric|min:0',
            'max_employees'    => 'sometimes|integer|min:1',
            'max_admins'       => 'sometimes|integer|min:1',
            'features'         => 'sometimes|array',
            'features.modules' => 'sometimes|array',
            'is_active'        => 'boolean',
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