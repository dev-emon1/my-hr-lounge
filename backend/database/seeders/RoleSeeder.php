<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * System Roles.
     */
    protected array $roles = [

        [

            'name' => 'Super Admin',

            'description' => 'Full system access across all tenants.',

            'is_system' => true,

            'is_active' => true,

        ],

        [

            'name' => 'Subscriber',

            'description' => 'Default administrator role for each tenant.',

            'is_system' => true,

            'is_active' => true,

        ],

    ];

    /**
     * Run Seeder.
     */
    public function run(): void
    {
        DB::transaction(function () {

            foreach ($this->roles as $role) {

                Role::updateOrCreate(

                    [

                        'tenant_id' => null,

                        'name' => $role['name'],

                        'guard_name' => 'web',

                    ],

                    [

                        'description' => $role['description'],

                        'is_system' => $role['is_system'],

                        'is_active' => $role['is_active'],

                    ]

                );
            }

        });

        app(PermissionRegistrar::class)

            ->forgetCachedPermissions();
    }
}