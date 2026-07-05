<?php

namespace App\Infrastructure\Tenant\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Infrastructure\Tenant\Contracts\TenantResolverInterface;
use App\Infrastructure\Tenant\Support\CurrentTenant;

class SetCurrentTenant
{
    public function __construct(
        protected TenantResolverInterface $resolver,
        protected CurrentTenant $currentTenant,
    ) {}

    public function handle(Request $request, Closure $next): Response
    {
        $tenant = $this->resolver->resolve();

        $this->currentTenant->set($tenant);

        return $next($request);
    }
}