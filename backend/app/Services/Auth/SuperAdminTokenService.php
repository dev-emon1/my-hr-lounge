<?php

namespace App\Services\Auth;

use App\Models\Central\SuperAdmin;
use App\Models\Central\SuperAdminSession;
use Illuminate\Support\Str;

class SuperAdminTokenService
{
    public function issueTokens(SuperAdmin $admin, array $deviceInfo = []): array
    {
        $expiryMinutes = (int) config('hr-lounge.access_token_expiry_minutes', 60);
        $expiryDays    = (int) config('hr-lounge.refresh_token_expiry_days', 7);

        // Access token
        $accessToken = $admin->createToken(
            name: $deviceInfo['device_name'] ?? 'API Token',
            expiresAt: now()->addMinutes($expiryMinutes)
        );

        // Refresh token
        $refreshToken     = Str::random(64);
        $refreshTokenHash = hash('sha256', $refreshToken);

        // Session record
        SuperAdminSession::create([
            'super_admin_id'     => $admin->id,
            'refresh_token_hash' => $refreshTokenHash,
            'device_name'        => $deviceInfo['device_name']  ?? null,
            'device_type'        => $deviceInfo['device_type']  ?? null,
            'browser'            => $deviceInfo['browser']       ?? null,
            'os'                 => $deviceInfo['os']            ?? null,
            'ip_address'         => $deviceInfo['ip_address']    ?? null,
            'is_suspicious'      => $deviceInfo['is_suspicious'] ?? false,
            'last_active_at'     => now(),
            'expires_at'         => now()->addDays($expiryDays),
            'created_at'         => now(),
        ]);

        return [
            'access_token'  => $accessToken->plainTextToken,
            'refresh_token' => $refreshToken,
            'token_type'    => 'Bearer',
            'expires_in'    => $expiryMinutes * 60,
        ];
    }

    public function rotateRefreshToken(string $refreshToken): ?array
    {
        $hash    = hash('sha256', $refreshToken);
        $session = SuperAdminSession::where('refresh_token_hash', $hash)
            ->whereNull('revoked_at')
            ->where('expires_at', '>', now())
            ->first();

        if (!$session) {
            return null;
        }

        $admin = SuperAdmin::find($session->super_admin_id);

        if (!$admin || !$admin->isActive()) {
            return null;
        }

        $session->revoke();
        $admin->tokens()->delete();

        return $this->issueTokens($admin, ['ip_address' => request()->ip()]);
    }

    public function revokeAllSessions(SuperAdmin $admin): void
    {
        $admin->sessions()
            ->whereNull('revoked_at')
            ->update(['revoked_at' => now()]);

        $admin->tokens()->delete();
    }

    public function revokeSessionById(SuperAdmin $admin, string $sessionId): bool
    {
        $session = $admin->sessions()->find($sessionId);

        if (!$session) {
            return false;
        }

        $session->revoke();
        return true;
    }
}