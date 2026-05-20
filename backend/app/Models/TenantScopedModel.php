<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class TenantScopedModel extends Model
{
    protected static function booted()
    {
        static::addGlobalScope('tenant', function (Builder $builder) {
            $tenant = app('current_tenant');

            // Bypass for Super Admin
            if (auth()->check() && auth()->user()->isSuperAdmin()) {
                return;
            }

            if ($tenant) {
                $builder->where('client_id', $tenant->id);
            }
        });

        // Auto-fill client_id on create
        static::creating(function (Model $model) {
            if (empty($model->client_id) && $tenant = app('current_tenant')) {
                $model->client_id = $tenant->id;
            }
        });
    }
}