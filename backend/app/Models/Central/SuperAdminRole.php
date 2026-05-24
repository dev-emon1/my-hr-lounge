<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SuperAdminRole extends Model
{
    use HasUuids;

    protected $connection = 'pgsql';
    protected $table      = 'super_admin_roles';

    protected $fillable = [
        'name',
        'slug',
        'permissions',
        'description',
    ];

    protected $casts = [
        'permissions' => 'array',
    ];

    public function superAdmins(): BelongsToMany
    {
        return $this->belongsToMany(
            SuperAdmin::class,
            'super_admin_role_user',
            'role_id',
            'super_admin_id'
        );
    }
}