<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTenantIsActive
{
    public function handle(Request $request, Closure $next): Response
    {
        $tenant = app('current_tenant');

        if ($tenant && !in_array($tenant->status, ['active', 'trial'])) {
            return response()->json([
                'error' => 'Your workspace subscription is inactive or expired.'
            ], 403);
        }

        return $next($request);
    }
}