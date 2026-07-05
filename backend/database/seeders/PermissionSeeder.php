<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Services\RBAC\PermissionRegistryService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Seed system permissions from Permission Registry.
     */
    public function run(): void
    {
        /** @var PermissionRegistryService $registry */
        $registry = app(PermissionRegistryService::class);

        $permissions = $registry->permissions();

        DB::transaction(function () use ($permissions) {

            /*
            |--------------------------------------------------------------------------
            | Sync Permissions
            |--------------------------------------------------------------------------
            */

            foreach ($permissions as $permission) {

                Permission::updateOrCreate(

                    [
                        'name'       => $permission['permission'],
                        'guard_name' => 'web',
                    ],

                    [
                        'module_key'   => $permission['module_key'],
                        'feature_key'  => $permission['feature_key'],
                        'template_key' => $permission['template_key'],
                        'action'       => $permission['action'],
                        'is_system'    => true,
                    ]

                );
            }

            /*
            |--------------------------------------------------------------------------
            | Remove Obsolete System Permissions
            |--------------------------------------------------------------------------
            */

            Permission::query()

                ->where('is_system', true)

                ->whereNotIn(

                    'name',

                    collect($permissions)

                        ->pluck('permission')

                        ->toArray()

                )

                ->delete();

        });

        /*
        |--------------------------------------------------------------------------
        | Clear Permission Cache
        |--------------------------------------------------------------------------
        */

        app(PermissionRegistrar::class)

            ->forgetCachedPermissions();
    }
}