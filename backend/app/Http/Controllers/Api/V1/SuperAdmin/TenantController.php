<?php

namespace App\Http\Controllers\Api\V1\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Central\Package;
use App\Models\Central\Tenant;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TenantController extends Controller
{
    use ApiResponse;

    /**
     * GET /api/v1/sa/tenants
     */
    public function index(Request $request): JsonResponse
    {
        $tenants = Tenant::with('package')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return $this->paginated($tenants);
    }

    /**
     * POST /api/v1/sa/tenants
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'slug'       => 'required|string|unique:tenants,slug|max:100|regex:/^[a-z0-9\-]+$/',
            'package_id' => 'required|uuid|exists:packages,id',
            'timezone'   => 'nullable|string',
            'country'    => 'nullable|string|max:10',
        ]);

        // Database schema name তৈরি করো
        $validated['database'] = 'tenant_' . $validated['slug'];
        $validated['status']   = 'trial';
        $validated['trial_ends_at'] = now()->addDays(14);

        $tenant = Tenant::create($validated);

        return $this->created([
            'tenant' => $tenant->load('package'),
        ], 'Tenant created successfully');
    }

    /**
     * GET /api/v1/sa/tenants/{id}
     */
    public function show(string $id): JsonResponse
    {
        $tenant = Tenant::with(['package', 'subscriptions'])->find($id);

        if (!$tenant) {
            return $this->notFound('Tenant not found');
        }

        return $this->success($tenant);
    }

    /**
     * PUT /api/v1/sa/tenants/{id}
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $tenant = Tenant::find($id);

        if (!$tenant) {
            return $this->notFound('Tenant not found');
        }

        $validated = $request->validate([
            'name'       => 'sometimes|string|max:255',
            'package_id' => 'sometimes|uuid|exists:packages,id',
            'timezone'   => 'nullable|string',
            'country'    => 'nullable|string|max:10',
            'settings'   => 'nullable|array',
        ]);

        $tenant->update($validated);

        return $this->success($tenant->load('package'), 'Tenant updated successfully');
    }

    /**
     * POST /api/v1/sa/tenants/{id}/suspend
     */
    public function suspend(string $id): JsonResponse
    {
        $tenant = Tenant::find($id);

        if (!$tenant) {
            return $this->notFound('Tenant not found');
        }

        $tenant->update(['status' => 'suspended']);

        return $this->success(null, 'Tenant suspended successfully');
    }

    /**
     * POST /api/v1/sa/tenants/{id}/activate
     */
    public function activate(string $id): JsonResponse
    {
        $tenant = Tenant::find($id);

        if (!$tenant) {
            return $this->notFound('Tenant not found');
        }

        $tenant->update(['status' => 'active']);

        return $this->success(null, 'Tenant activated successfully');
    }

    /**
     * GET /api/v1/sa/dashboard
     */
    public function dashboard(): JsonResponse
    {
        return $this->success([
            'total_tenants'     => Tenant::count(),
            'active_tenants'    => Tenant::where('status', 'active')->count(),
            'trial_tenants'     => Tenant::where('status', 'trial')->count(),
            'suspended_tenants' => Tenant::where('status', 'suspended')->count(),
            'total_packages'    => Package::count(),
            'active_packages'   => Package::where('is_active', true)->count(),
        ]);
    }
}