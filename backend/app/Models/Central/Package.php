<?php

namespace App\Models\Central;

use App\Enums\PackageStatusEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;
    use HasUuids;

    /*
    |--------------------------------------------------------------------------
    | Connection
    |--------------------------------------------------------------------------
    */

    protected $connection = 'pgsql';

    /*
    |--------------------------------------------------------------------------
    | Mass Assignment
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        /*
        |--------------------------------------------------------------------------
        | Basic Information
        |--------------------------------------------------------------------------
        */

        'name',

        'slug',

        'description',

        /*
        |--------------------------------------------------------------------------
        | Pricing
        |--------------------------------------------------------------------------
        */

        'price_monthly',

        'price_yearly',

        /*
        |--------------------------------------------------------------------------
        | Package Builder
        |--------------------------------------------------------------------------
        */

        'modules',

        'limits',

        'integrations',

        'registry_snapshot',

        /*
        |--------------------------------------------------------------------------
        | Trial
        |--------------------------------------------------------------------------
        */

        'is_trial',

        'trial_period',

        /*
        |--------------------------------------------------------------------------
        | Status
        |--------------------------------------------------------------------------
        */

        'status',

    ];

    /*
    |--------------------------------------------------------------------------
    | Attribute Casting
    |--------------------------------------------------------------------------
    */

    protected $casts = [

        'modules' => 'array',

        'limits' => 'array',

        'integrations' => 'array',

        'registry_snapshot' => 'array',

        'is_trial' => 'boolean',

        'price_monthly' => 'decimal:2',

        'price_yearly' => 'decimal:2',

        'status' => PackageStatusEnum::class,

    ];

    /*
    |--------------------------------------------------------------------------
    | Route Model Binding
    |--------------------------------------------------------------------------
    */

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function subscriptions(): HasMany
    {
        return $this->hasMany(
            Subscription::class
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

    public function scopeActive(
        Builder $query
    ): Builder {

        return $query->where(

            'status',

            PackageStatusEnum::ACTIVE

        );
    }

    public function scopeSearch(
        Builder $query,
        ?string $keyword
    ): Builder {

        if (! filled($keyword)) {
            return $query;
        }

        $keyword = trim($keyword);

        return $query->where(function ($query) use (
            $keyword
        ) {

            $query

                ->where(
                    'name',
                    'ILIKE',
                    "%{$keyword}%"
                )

                ->orWhere(
                    'slug',
                    'ILIKE',
                    "%{$keyword}%"
                )

                ->orWhereRaw(
                    'price_monthly::text ILIKE ?',
                    ["%{$keyword}%"]
                )

                ->orWhereRaw(
                    'price_yearly::text ILIKE ?',
                    ["%{$keyword}%"]
                );

        });
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Methods
    |--------------------------------------------------------------------------
    */

    public function hasModule(
        string $module
    ): bool {

        return data_get(

            $this->modules,

            "{$module}.enabled",

            false

        );
    }

    public function hasFeature(
        string $module,
        string $feature
    ): bool {

        return data_get(

            $this->modules,

            "{$module}.children.{$feature}.enabled",

            false

        );
    }

    public function hasPermission(
        string $module,
        string $feature,
        string $permission
    ): bool {

        return in_array(

            $permission,

            data_get(

                $this->registry_snapshot,

                "modules.{$module}.children.{$feature}.permissions",

                []

            ),

            true

        );
    }

    /*
    |--------------------------------------------------------------------------
    | Registry Snapshot
    |--------------------------------------------------------------------------
    */

    public function registrySnapshot(): array
    {
        return $this->registry_snapshot ?? [];
    }

    /*
    |--------------------------------------------------------------------------
    | Modules
    |--------------------------------------------------------------------------
    */

    public function modules(): array
    {
        return $this->modules ?? [];
    }

    /*
    |--------------------------------------------------------------------------
    | Limits
    |--------------------------------------------------------------------------
    */

    public function limits(): array
    {
        return $this->limits ?? [];
    }

    /*
    |--------------------------------------------------------------------------
    | Integrations
    |--------------------------------------------------------------------------
    */

    public function integrations(): array
    {
        return $this->integrations ?? [];
    }
}