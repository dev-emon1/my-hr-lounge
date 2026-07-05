<?php

namespace App\Infrastructure\Tenant\Resolvers;

use App\Infrastructure\Tenant\Contracts\TenantResolverInterface;
use App\Models\Central\Tenant;
use Illuminate\Support\Facades\Auth;

class SharedTenantResolver implements TenantResolverInterface
{
    /**
     * Resolve current tenant from authenticated client.
     */
    public function resolve(): ?Tenant
    {
        $user = Auth::user();

        if (! $user) {
            return null;
        }

        return $user->tenant;
    }
}