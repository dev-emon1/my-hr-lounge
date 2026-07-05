<?php

namespace App\Models;

use App\Models\Central\Tenant;
use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasUuids;
    use BelongsToTenant;

    /**
     * UUID Primary Key
     */
    public $incrementing = false;

    protected $keyType = 'string';

    /**
     * Mass Assignable
     */
    protected $fillable = [
        'tenant_id',
        'name',
        'email',
        'phone',
        'password',
        'is_owner',
        'is_active',
        'email_verified_at',
    ];

    /**
     * Hidden Attributes
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Attribute Casting
     */
    protected $casts = [
        'password' => 'hashed',
        'email_verified_at' => 'datetime',
        'is_owner' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Tenant Relationship
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}