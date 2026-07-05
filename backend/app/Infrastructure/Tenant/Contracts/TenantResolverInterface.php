<?php

namespace App\Infrastructure\Tenant\Contracts;

use App\Models\Central\Tenant;

interface TenantResolverInterface
{
    /**
     * Resolve the current tenant from the incoming request.
     */
    public function resolve(): ?Tenant;
}