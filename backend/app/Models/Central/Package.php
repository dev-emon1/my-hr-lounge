<?php

namespace App\Models\Central;

use App\Enums\PackageStatusEnum;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory, HasUuids;

    protected $connection = 'pgsql';

    protected $fillable = [
        'name', 'slug', 'description',
        'price_monthly', 'price_yearly',
        'modules', 'limits', 'integrations',
        'is_trial', 'trial_period', 'status',
    ];

    protected $casts = [
        'modules'       => 'array',
        'limits'        => 'array',
        'integrations'  => 'array',
        'is_trial'      => 'boolean',
        'price_monthly' => 'decimal:2',
        'price_yearly'  => 'decimal:2',
        'status'        => PackageStatusEnum::class,
    ];

    protected $hidden = ['modules', 'integrations']; // Default hide heavy fields

    /**
     * Route Model Binding
     *
     * /packages/starter
     * starter = slug
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getModules(): array
    {
        return $this->modules ?? [];
    }

    // public function hasModule(string $moduleKey): bool
    // {
    //     return in_array($moduleKey, $this->getModules());
    // }

    public function hasModule(string $module): bool
    {
        return data_get($this->modules, $module, false);
    }

    // ── Relationships ──────────────────────────────────────────
    public function tenants(): HasMany
    {
        return $this->hasMany(Tenant::class);
    }

    // ── Scopes ────────────────────────────────────────────────
    public function scopeActive($query)
    {
        return $query->where('status', PackageStatusEnum::ACTIVE->value);
    }

    public function scopeSearch($query, string $term)
    {
        $term = trim($term);
        if (empty($term)) return $query;

        return $query->where(function ($q) use ($term) {
            $q->where('name', 'ILIKE', "%{$term}%")
                ->orWhere('slug', 'ILIKE', "%{$term}%")
                ->orWhereRaw('price_monthly::text ILIKE ?', ["%{$term}%"])
                ->orWhereRaw('price_yearly::text ILIKE ?', ["%{$term}%"]);

            if (is_numeric($term)) {
                $price = (float) $term;
                $q->orWhere('price_monthly', $price)
                  ->orWhere('price_yearly', $price);
            }
        });
    }

    // Optional: Limit visible attributes for index
    // protected $appends = []; // remove if not needed
}
