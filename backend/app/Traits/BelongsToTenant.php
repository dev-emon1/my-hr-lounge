<?php

namespace App\Traits;

use App\Infrastructure\Tenant\Scopes\TenantScope;
use App\Models\Central\Tenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait BelongsToTenant
{
    /**
     * Boot trait.
     */
  protected static function bootBelongsToTenant(): void
{
    static::creating(function (Model $model) {

        if (! empty($model->tenant_id)) {
            return;
        }

        if (tenant()) {
            $model->tenant_id = tenant()->id;
        }
    });
}

    /**
     * Tenant relationship.
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}