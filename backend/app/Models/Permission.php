<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    /**
     * Mass assignable attributes.
     */
    protected $fillable = [

        /*
        |--------------------------------------------------------------------------
        | Permission
        |--------------------------------------------------------------------------
        */

        'name',

        'guard_name',

        /*
        |--------------------------------------------------------------------------
        | Registry Metadata
        |--------------------------------------------------------------------------
        */

        'module_key',

        'feature_key',

        'template_key',

        'action',

        /*
        |--------------------------------------------------------------------------
        | System
        |--------------------------------------------------------------------------
        */

        'is_system',

    ];
}