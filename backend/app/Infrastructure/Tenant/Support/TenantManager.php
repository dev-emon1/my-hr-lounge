<?php

namespace App\Infrastructure\Tenant\Support;

use App\Infrastructure\Tenant\Support\CurrentTenant;
use App\Models\Central\Tenant;

class TenantManager
{
    public function __construct(
        protected CurrentTenant $currentTenant
    ) {}

    public function current(): ?Tenant
    {
        return $this->currentTenant->get();
    }

    public function hasTenant(): bool
    {
        return $this->currentTenant->hasTenant();
    }

    public function clear(): void
    {
        $this->currentTenant->forget();
    }
}