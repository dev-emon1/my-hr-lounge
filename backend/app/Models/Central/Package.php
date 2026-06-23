<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasUuids;

    protected $connection = 'pgsql';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price_monthly',
        'price_yearly',
        'max_employees',
        'max_admins',
        'device_limit',
        'max_branches',
        'department_limit',
        'storage_limit_gb',
        'modules',
        'limits',
        'integrations',
        'is_active',
    ];

    protected $casts = [
        'modules'      => 'array',
        'limits'       => 'array',
        'integrations' => 'array',
        'is_active'     => 'boolean',
        'price_monthly' => 'decimal:2',
        'price_yearly'  => 'decimal:2',
    ];

    public function getModules(): array
    {
        return $this->modules ?? [];
    }

    public function hasModule(string $moduleKey): bool
    {
        return in_array($moduleKey, $this->getModules());
    }

    // ── Relationships ──────────────────────────────────────────
    public function tenants(): HasMany
    {
        return $this->hasMany(Tenant::class);
    }

    // ── Scopes ────────────────────────────────────────────────
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}