<?php

namespace App\Models\Central;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SuperAdminRole extends Model
{
    use HasUuids;

    protected $connection = 'pgsql';

    protected $table = 'super_admin_roles';

    protected $fillable = [

        'name',

        'slug',

        'description',

        'is_system',

        'is_active',

    ];

    protected $casts = [

        'is_system' => 'boolean',

        'is_active' => 'boolean',

    ];

    /**
     * Super Admins
     */
    public function superAdmins(): BelongsToMany
    {
        return $this->belongsToMany(
            SuperAdmin::class,
            'super_admin_role_user',
            'role_id',
            'super_admin_id'
        );
    }

    /**
     * Permissions
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(
            Permission::class,
            'super_admin_role_permissions',
            'role_id',
            'permission_id'
        );
    }
}