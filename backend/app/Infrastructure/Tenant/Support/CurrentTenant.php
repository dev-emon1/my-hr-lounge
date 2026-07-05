<?php

namespace App\Infrastructure\Tenant\Support;

use App\Models\Central\Tenant;

class CurrentTenant
{
    private ?Tenant $tenant = null;

    /**
     * Store current tenant.
     */
    public function set(?Tenant $tenant): void
    {
        $this->tenant = $tenant;
    }

    /**
     * Get current tenant.
     */
    public function get(): ?Tenant
    {
        return $this->tenant;
    }

    /**
     * Get current tenant id.
     */
    public function id(): ?string
    {
        return $this->tenant?->id;
    }

    /**
     * Check whether tenant exists.
     */
    public function hasTenant(): bool
    {
        return $this->tenant !== null;
    }

    /**
     * Forget current tenant.
     */
    public function forget(): void
    {
        $this->tenant = null;
    }
}