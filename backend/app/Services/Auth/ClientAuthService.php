<?php

namespace App\Services\Auth;

use App\Actions\Auth\LoginClientAction;
use App\Infrastructure\Tenant\Support\CurrentTenant;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class ClientAuthService
{
    use ApiResponse;

    public function __construct(
        protected LoginClientAction $loginAction,
        protected ClientTokenService $tokenService,
        protected CurrentTenant $currentTenant,
    ) {}

    /**
     * Client Login
     */
    public function login(array $credentials)
    {
        $user = $this->loginAction->execute($credentials);

        // Load tenant relationship
        $user->load('tenant');

        // Store current tenant
        $this->currentTenant->set($user->tenant);

        // Generate Sanctum Token
        $token = $this->tokenService->generate($user);

        return $this->success(
            [
                'user'  => $user,
                'token' => $token,
            ],
            'Login successful.'
        );
    }

    /**
     * Current Authenticated User
     */
    public function me()
    {
        /** @var User|null $user */
        $user = Auth::user();

        if (! $user) {
            return $this->unauthorized();
        }

        $user->load('tenant');

        return $this->success([
            'user' => $user,
        ]);
    }

    /**
     * Logout Current Device
     */
    public function logout()
    {
        /** @var User|null $user */
        $user = Auth::user();

        if (! $user) {
            return $this->unauthorized();
        }

        /** @var PersonalAccessToken|null $token */
        $token = $user->currentAccessToken();

        if ($token !== null) {
            $token->delete();
        }

        return $this->success(
            null,
            'Logged out successfully.'
        );
    }
}