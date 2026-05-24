<?php

namespace App\Models\Central;

use App\Enums\TenantStatusEnum;
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
        'name',
        'slug',
        'database',
        'package_id',
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
        $packageModules = $this->package?->features['modules'] ?? [];

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
        return $this->belongsTo(Package::class);
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
}