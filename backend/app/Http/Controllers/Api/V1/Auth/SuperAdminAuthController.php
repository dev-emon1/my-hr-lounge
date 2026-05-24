<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\SuperAdminAuthService;
use App\Services\Auth\SuperAdminTokenService;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SuperAdminAuthController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected SuperAdminAuthService  $authService,
        protected SuperAdminTokenService $tokenService,
    ) {}

    /**
     * POST /api/v1/sa/auth/login
     */
    public function login(Request $request): JsonResponse
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $result = $this->authService->attempt(
            credentials: $request->only('email', 'password'),
            ip: $request->ip(),
        );

        if (!$result['success']) {
            if (!empty($result['requires_2fa'])) {
                return $this->error(
                    $result['message'],
                    $result['code'],
                    403,
                    ['requires_2fa' => true, 'admin_id' => $result['admin_id']]
                );
            }

            $status = $result['code'] === 'AUTH_002' ? 429 : 401;
            return $this->error($result['message'], $result['code'], $status);
        }

        return $this->success([
            'user'   => $this->formatAdmin($result['admin']),
            'tokens' => $result['tokens'],
        ], 'Login successful');
    }

    /**
     * POST /api/v1/sa/auth/refresh
     */
    public function refresh(Request $request): JsonResponse
    {
        $request->validate([
            'refresh_token' => 'required|string',
        ]);

        $tokens = $this->tokenService->rotateRefreshToken(
            $request->input('refresh_token')
        );

        if (!$tokens) {
            return $this->error('Invalid or expired refresh token', 'AUTH_006', 401);
        }

        return $this->success($tokens, 'Token refreshed');
    }

    /**
     * POST /api/v1/sa/auth/logout
     */
    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        if ($refreshToken = $request->input('refresh_token')) {
            $hash = hash('sha256', $refreshToken);
            $request->user()->sessions()
                ->where('refresh_token_hash', $hash)
                ->update(['revoked_at' => now()]);
        }

        return $this->success(null, 'Logged out successfully');
    }

    /**
     * POST /api/v1/sa/auth/logout-all
     */
    public function logoutAll(Request $request): JsonResponse
    {
        $this->tokenService->revokeAllSessions($request->user());
        return $this->success(null, 'Logged out from all devices');
    }

    /**
     * GET /api/v1/sa/auth/me
     */
    public function me(Request $request): JsonResponse
    {
        $admin = $request->user()->load('roles');

        return $this->success([
            'user'        => $this->formatAdmin($admin),
            'roles'       => $admin->roles->pluck('name'),
            'permissions' => $admin->roles->flatMap(fn($r) => $r->permissions)->unique()->values(),
        ]);
    }

    /**
     * GET /api/v1/sa/auth/sessions
     */
    public function sessions(Request $request): JsonResponse
    {
        $sessions = $request->user()
            ->activeSessions()
            ->orderByDesc('last_active_at')
            ->get()
            ->map(fn($s) => [
                'id'             => $s->id,
                'device_name'    => $s->device_name,
                'device_type'    => $s->device_type,
                'browser'        => $s->browser,
                'os'             => $s->os,
                'ip_address'     => $s->ip_address,
                'is_suspicious'  => $s->is_suspicious,
                'last_active_at' => $s->last_active_at,
                'created_at'     => $s->created_at,
            ]);

        return $this->success($sessions);
    }

    /**
     * DELETE /api/v1/sa/auth/sessions/{session}
     */
    public function revokeSession(Request $request, string $sessionId): JsonResponse
    {
        $revoked = $this->tokenService->revokeSessionById(
            $request->user(),
            $sessionId
        );

        if (!$revoked) {
            return $this->notFound('Session not found');
        }

        return $this->success(null, 'Session revoked');
    }

    // ── Private ───────────────────────────────────────────────

    private function formatAdmin($admin): array
    {
        return [
            'id'                 => $admin->id,
            'name'               => $admin->name,
            'email'              => $admin->email,
            'status'             => $admin->status,
            'two_factor_enabled' => $admin->two_factor_enabled,
            'last_login_at'      => $admin->last_login_at,
        ];
    }
}