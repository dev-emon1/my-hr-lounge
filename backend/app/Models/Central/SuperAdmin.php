<?php

namespace App\Models\Central;

use App\Enums\UserStatusEnum;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class SuperAdmin extends Authenticatable
{
    use HasApiTokens, HasUuids, SoftDeletes;

    protected $connection = 'pgsql';
    protected $table      = 'super_admins';

    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'login_attempts',
        'locked_until',
        'last_login_at',
        'last_login_ip',
        'two_factor_secret',
        'two_factor_enabled',
        'two_factor_confirmed_at',
        'two_factor_recovery_codes',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes',
    ];

    protected $casts = [
        'status'                  => UserStatusEnum::class,
        'locked_until'            => 'datetime',
        'last_login_at'           => 'datetime',
        'two_factor_confirmed_at' => 'datetime',
        'two_factor_enabled'      => 'boolean',
        'login_attempts'          => 'integer',
        'password'                => 'hashed',
    ];

    // ── Relationships ──────────────────────────────────────────

    public function sessions(): HasMany
    {
        return $this->hasMany(SuperAdminSession::class);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            SuperAdminRole::class,
            'super_admin_role_user',
            'super_admin_id',
            'role_id'
        );
    }

    // ── Helpers ───────────────────────────────────────────────

    public function isActive(): bool
    {
        return $this->status === UserStatusEnum::Active;
    }

    public function isLocked(): bool
    {
        return $this->status === UserStatusEnum::Locked
            || ($this->locked_until && $this->locked_until->isFuture());
    }

    public function incrementLoginAttempts(): void
    {
        $this->increment('login_attempts');

        $max = (int) config('hr-lounge.max_login_attempts', 5);

        if ($this->login_attempts >= $max) {
            $minutes = (int) config('hr-lounge.lockout_duration_minutes', 15);
            $this->update([
                'status'       => UserStatusEnum::Locked,
                'locked_until' => now()->addMinutes($minutes),
            ]);
        }
    }

    public function resetLoginAttempts(): void
    {
        $this->update([
            'login_attempts' => 0,
            'locked_until'   => null,
            'status'         => UserStatusEnum::Active,
        ]);
    }

    // Super Admin এর নিজের roles এর permissions check
    public function hasPermission(string $permission): bool
    {
        // Main super admin (প্রথম user) সব কিছু করতে পারবে
        if ($this->roles->isEmpty()) {
            return true;
        }

        return $this->roles->flatMap(function ($role) {
            return $role->permissions;
        })->contains($permission);
    }

    public function activeSessions(): HasMany
    {
        return $this->sessions()
            ->whereNull('revoked_at')
            ->where('expires_at', '>', now());
    }
}