<?php

namespace App\Infrastructure\Tenant\Services;

use App\Infrastructure\Tenant\Support\CurrentTenant;
use App\Models\Central\Package;
use App\Models\Central\Subscription;

class PackageAccessService
{
    public function __construct(
        protected CurrentTenant $currentTenant,
    ) {}

    /**
     * Current tenant
     */
    public function tenant()
    {
        return $this->currentTenant->get();
    }

    /**
     * Active subscription
     */
    public function subscription(): ?Subscription
    {
        return $this->tenant()?->subscriptions()
            ->whereIn('status', ['trial', 'active'])
            ->latest('current_period_end')
            ->first();
    }

    /**
     * Current package
     */
    public function package(): ?Package
    {
        return $this->subscription()?->package;
    }

    /**
     * Enabled modules
     */
    public function modules(): array
    {
        return $this->package()?->modules ?? [];
    }

    /**
     * Package limits
     */
    public function limits(): array
    {
        return $this->package()?->limits ?? [];
    }

    /**
     * Package integrations
     */
    public function integrations(): array
    {
        return $this->package()?->integrations ?? [];
    }

    /**
     * Has module?
     */
    public function hasModule(string $module): bool
    {
        return in_array(
            $module,
            $this->modules()
        );
    }

    /**
     * Has feature?
     */
    public function hasFeature(
        string $module,
        string $feature
    ): bool {

        $modules = $this->modules();

        if (! isset($modules[$module])) {
            return false;
        }

        return in_array(
            $feature,
            $modules[$module]['features'] ?? []
        );
    }

    /**
     * Get limit
     */
    public function limit(string $key): mixed
    {
        return $this->limits()[$key] ?? null;
    }

    /**
     * Integration enabled?
     */
    public function hasIntegration(string $key): bool
    {
        return (bool) (
            $this->integrations()[$key] ?? false
        );
    }
}