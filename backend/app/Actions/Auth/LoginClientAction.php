<?php

namespace App\Actions\Auth;

use App\Exceptions\Authentication\InvalidCredentialsException;
use App\Infrastructure\Tenant\Support\CurrentTenant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginClientAction
{
    public function execute(array $credentials): User
    {
        // Find user by email
        $user = User::where('email', $credentials['email'])->first();

        if (! $user) {
            throw new InvalidCredentialsException();
        }

        // Verify password
        if (! Hash::check($credentials['password'], $user->password)) {
            throw new InvalidCredentialsException();
        }

        // Check tenant exists
        if (! $user->tenant) {
            throw new InvalidCredentialsException();
        }

        // TODO:
        // Check tenant active status after Tenant module is completed.
        // Example:
        // if (! $user->tenant->is_active) {
        //     throw new TenantInactiveException();
        // }

        // Set current tenant
        app(CurrentTenant::class)->set($user->tenant);

        // TODO:
        // Record login audit

        return $user;
    }
}