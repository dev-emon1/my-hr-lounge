<?php

namespace App\Http\Controllers\Api\V1\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Services\RBAC\PermissionRegistryService;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;

class RegistryController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected PermissionRegistryService $registry
    ) {}

    /**
     * GET /registry/modules
     */
    public function modules(): JsonResponse
    {
        return $this->success(
            $this->registry->modules()
        );
    }

    /**
     * GET /registry/features
     */
    public function features(): JsonResponse
    {
        return $this->success(
            $this->registry->features()
        );
    }

    /**
     * GET /registry/templates
     */
    public function templates(): JsonResponse
    {
        return $this->success(
            $this->registry->templates()
        );
    }

    /**
     * GET /registry/permissions
     */
    public function permissions(): JsonResponse
    {
        return $this->success(
            $this->registry->permissions()
        );
    }
}