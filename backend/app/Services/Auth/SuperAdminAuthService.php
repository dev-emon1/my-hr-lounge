<?php

namespace App\Services\Auth;

use App\Models\Central\SuperAdmin;
use Illuminate\Support\Facades\Hash;

class SuperAdminAuthService
{
    public function __construct(
        protected SuperAdminTokenService $tokenService
    ) {}

    public function attempt(array $credentials, string $ip): array
    {
        $admin = SuperAdmin::where('email', $credentials['email'])->first();

        if (!$admin) {
            return [
                'success' => false,
                'code'    => 'AUTH_001',
                'message' => 'Invalid credentials',
            ];
        }

        if ($admin->isLocked()) {
            $time = $admin->locked_until?->diffForHumans();
            return [
                'success' => false,
                'code'    => 'AUTH_002',
                'message' => "Account locked. Try again {$time}",
            ];
        }

        if (!$admin->isActive()) {
            return [
                'success' => false,
                'code'    => 'AUTH_003',
                'message' => 'Account is inactive',
            ];
        }

        if (!Hash::check($credentials['password'], $admin->password)) {
            $admin->incrementLoginAttempts();
            return [
                'success' => false,
                'code'    => 'AUTH_001',
                'message' => 'Invalid credentials',
            ];
        }

        $admin->resetLoginAttempts();

        // 2FA check
        if ($admin->two_factor_enabled) {
            return [
                'success'      => false,
                'requires_2fa' => true,
                'code'         => 'AUTH_004',
                'message'      => 'Two-factor authentication required',
                'admin_id'     => $admin->id,
            ];
        }

        $deviceInfo = $this->buildDeviceInfo($ip);
        $tokens     = $this->tokenService->issueTokens($admin, $deviceInfo);

        $admin->update([
            'last_login_at' => now(),
            'last_login_ip' => $ip,
        ]);

        return [
            'success' => true,
            'admin'   => $admin,
            'tokens'  => $tokens,
        ];
    }

    private function buildDeviceInfo(string $ip): array
    {
        $agent = new \Jenssegers\Agent\Agent();
        $agent->setUserAgent(request()->userAgent() ?? '');

        return [
            'device_name' => $agent->device() ?: ($agent->isDesktop() ? 'Desktop' : 'Mobile'),
            'device_type' => $agent->isMobile() ? 'mobile' : ($agent->isTablet() ? 'tablet' : 'desktop'),
            'browser'     => $agent->browser() ?: 'Unknown',
            'os'          => $agent->platform() ?: 'Unknown',
            'ip_address'  => $ip,
        ];
    }
}