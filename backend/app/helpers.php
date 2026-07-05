<?php

use App\Infrastructure\Tenant\Support\CurrentTenant;
use App\Infrastructure\Tenant\Services\PackageAccessService;

if (! function_exists('tenant')) {

    /**
     * Current Tenant
     */
    function tenant()
    {
        return app(CurrentTenant::class)->get();
    }
}

if (! function_exists('tenant_id')) {

    /**
     * Current Tenant ID
     */
    function tenant_id(): ?string
    {
        return tenant()?->id;
    }
}

if (! function_exists('tenant_setting')) {

    /**
     * Get tenant setting.
     */
    function tenant_setting(string $key, mixed $default = null): mixed
    {
        return data_get(
            tenant()?->settings,
            $key,
            $default
        );
    }
}

if (! function_exists('tenant_package')) {

    /**
     * Current package.
     */
    function tenant_package()
    {
        return tenant()?->activeSubscription?->package;
    }
}

if (! function_exists('tenant_modules')) {

    /**
     * Package modules.
     */
    function tenant_modules(): array
    {
        return tenant_package()?->modules ?? [];
    }
}

if (! function_exists('tenant_limits')) {

    /**
     * Package limits.
     */
    function tenant_limits(): array
    {
        return tenant_package()?->limits ?? [];
    }
}

if (! function_exists('packageAccess')) {

    function packageAccess(): PackageAccessService
    {
        return app(PackageAccessService::class);
    }

}