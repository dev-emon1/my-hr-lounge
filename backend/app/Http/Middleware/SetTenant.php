<?php

namespace App\Http\Middleware;

use App\Models\Client;
use Closure;
use Illuminate\Http\Request;

class SetTenant
{
    public function handle(Request $request, Closure $next)
    {
        $subdomain = explode('.', $request->getHost())[0];

        $client = Client::where('subdomain', $subdomain)
            ->orWhere('domain', $request->getHost())
            ->where('status', 'active')
            ->first();

        if (!$client) {
            abort(404, 'Tenant not found');
        }

        app()->instance('current_tenant', $client);
        $request->setUserResolver(fn() => auth()->user()); // safety

        return $next($request);
    }
}
