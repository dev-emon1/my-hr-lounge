<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ClientLoginRequest;
use App\Services\Auth\ClientAuthService;

class ClientAuthController extends Controller
{
    public function __construct(
        protected ClientAuthService $service
    ) {}

    /**
     * Client Login
     */
    public function login(ClientLoginRequest $request)
    {
        return $this->service->login(
            $request->validated()
        );
    }

    /**
     * Current Logged-in User
     */
    public function me()
    {
        return $this->service->me();
    }

    /**
     * Logout
     */
    public function logout()
    {
        return $this->service->logout();
    }
}