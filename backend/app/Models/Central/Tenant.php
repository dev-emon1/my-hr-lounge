<?php

namespace App\Models\Central;

use App\Enums\TenantStatusEnum;
use App\Models\Central\TenantFile;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Multitenancy\Models\Tenant as SpatieTenant;

class Tenant extends SpatieTenant
{
    use HasUuids;

    protected $connection = 'pgsql';

    protected $fillable = [
        'company_name',
        'slug',
        'owner_name',
        'client_type',
        'address',
        'phone',
        'email',
        'total_employees',
        'employee_count',
        'status',
        'trial_ends_at',
        'settings',
        'timezone',
        'country',
        'domain',
    ];

    protected $casts = [
        'status'        => TenantStatusEnum::class,
        'settings'      => 'array',
        'trial_ends_at' => 'datetime',
    ];

    // Spatie multitenancy এই method দিয়ে schema নাম বের করে
    public function getDatabaseName(): string
    {
        return $this->database;
    }

    public function isAccessible(): bool
    {
        return $this->status->isAccessible();
    }

    // Package এর কোন modules আছে সেটা locked/unlocked সহ return করে
    // Frontend sidebar এ কাজে লাগবে
    public function getModulesWithAccess(): array
    {
        $allModules     = config('hr-lounge.modules');
        $packageModules = $this->package?->modules ?? [];

        return collect($allModules)->map(function ($module) use ($packageModules) {
            return [
                'key'    => $module['key'],
                'label'  => $module['label'],
                'group'  => $module['group'],
                'locked' => !in_array($module['key'], $packageModules),
            ];
        })->toArray();
    }

    // ── Relationships ──────────────────────────────────────────
    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'activeSubscription.package_id');
        // $tenant->load(['activeSubscription.package']);
    }
    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function activeSubscription(): HasOne
    {
        return $this->hasOne(Subscription::class)
            ->where('status', 'active')
            ->latestOfMany();
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function files()
    {
        return $this->hasMany(TenantFile::class);
    }

    public function owner()
    {
        return $this->hasOne(User::class)->where('is_owner', true);
    }

    public function scopeActive($query)
    {
        return $query->whereIn('status', ['trial', 'active']);
    }

    public function scopeTrial($query)
    {
        return $query->where('status', 'trial');
    }
}
