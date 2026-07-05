<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Infrastructure\Tenant\Contracts\TenantResolverInterface;
use App\Infrastructure\Tenant\Resolvers\SharedTenantResolver;
use App\Infrastructure\Tenant\Services\PackageAccessService;
use App\Infrastructure\Tenant\Support\CurrentTenant;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            TenantResolverInterface::class,
            SharedTenantResolver::class
        );

        $this->app->singleton(
        PackageAccessService::class,
        fn ($app) => new PackageAccessService(
        $app->make(CurrentTenant::class)
            )
        ); 
    }
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}