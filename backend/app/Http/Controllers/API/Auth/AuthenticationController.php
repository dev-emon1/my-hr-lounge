<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    /**
     * Login - Hybrid (supports both Inertia + API Token)
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only(['login', 'password']);
        $type = $request->type;

        $user = User::where(function ($q) use ($request) {
            $q->where('email', $request->login)
                ->orWhere('phone', $request->login)
                ->orWhere('user_name', $request->login);
        })
            ->when($type, fn($q) => $q->where('type', $type))
            ->active()
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'login' => ['Invalid credentials.'],
            ]);
        }

        // Tenant Check
        if ($user->client && $user->client->status !== 'active') {
            throw ValidationException::withMessages([
                'login' => ['Your workspace is suspended or inactive.'],
            ]);
        }

        // 2FA Check (if enabled)
        // if ($user->two_factor_secret) {
        //     // You can return 2FA required response here
        // }

        // Create Token for API / Mobile
        $tokenName = $request->device_name ?? 'api-token-' . now()->format('YmdHis');
        $token = $user->createToken($tokenName, ['*'], now()->addMonths(1))->plainTextToken;

        // Web session (for Inertia)
        if ($request->wantsJson() === false) {
            Auth::login($user);
            $request->session()->regenerate();
        }

        return response()->json([
            'message' => 'Login successful',
            'token'   => $token,
            'user'    => new UserResource($user->load('client')),
        ]);
    }

    /**
     * Register New User (Usually inside a Tenant)
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $tenant = app('current_tenant'); // Set by middleware

        if (!$tenant) {
            return response()->json(['error' => 'Tenant not found'], 404);
        }

        $user = User::create([
            'client_id' => $tenant->id,
            'user_name' => $request->user_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'type'      => $request->type ?? 'user',
            'status'    => true,
            'password'  => Hash::make($request->password),
        ]);

        // Auto login after registration
        $token = $user->createToken('register-token')->plainTextToken;

        return response()->json([
            'message' => 'Account created successfully',
            'token'   => $token,
            'user'    => new UserResource($user->load('client')),
        ], 201);
    }

    /**
     * Logout (Multi-device support)
     */
    public function logout(Request $request): JsonResponse
    {
        $user = $request->user();

        // Revoke current token only
        $user->currentAccessToken()?->delete();

        // Or revoke all tokens:
        // $user->revokeAllTokens();

        Auth::guard('web')->logout();

        return response()->json([
            'message' => 'Logged out successfully'
        ]);
    }

    /**
     * Get Current Authenticated User
     */
    public function me(Request $request): JsonResponse
    {
        return response()->json([
            'user' => new UserResource($request->user()->load('client'))
        ]);
    }
}
