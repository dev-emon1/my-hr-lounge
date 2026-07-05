<?php

namespace App\Models\Central;

use App\Enums\TenantStatusEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
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

    /**
     * Future scope.
     * Currently we use a shared database.
     * This method exists for future database-per-tenant architecture.
     */
    public function getDatabaseName(): string
    {
        return config('database.default');
    }

    /**
     * Check tenant accessibility.
     */
    public function isAccessible(): bool
    {
        return $this->status->isAccessible();
    }

    /**
     * Return enabled modules from active package.
     */
    public function getModulesWithAccess(): array
    {
        $allModules = config('hr-lounge.modules');

        $packageModules = $this
            ->activeSubscription?->package?->modules ?? [];

        return collect($allModules)
            ->map(function ($module) use ($packageModules) {
                return [
                    'key'    => $module['key'],
                    'label'  => $module['label'],
                    'group'  => $module['group'],
                    'locked' => ! in_array($module['key'], $packageModules),
                ];
            })
            ->toArray();
    }

    /**
     * All subscriptions.
     */
    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    /**
     * Current active subscription.
     */
public function activeSubscription(): HasOne
{
    return $this->hasOne(Subscription::class)
        ->where('status', 'active')
        ->latest('current_period_end');
}
    /**
     * Tenant users.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Tenant files.
     */
    public function files(): HasMany
    {
        return $this->hasMany(TenantFile::class);
    }

    /**
     * Company owner.
     */
    public function owner(): HasOne
    {
        return $this->hasOne(User::class)
            ->where('is_owner', true);
    }

    /**
     * Active tenants.
     */
    public function scopeActive($query)
    {
        return $query->whereIn('status', ['trial', 'active']);
    }

    /**
     * Trial tenants.
     */
    public function scopeTrial($query)
    {
        return $query->where('status', 'trial');
    }
}