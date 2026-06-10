<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [

            'User Management' => [

                'Users' => [
                    'view users',
                    'create users',
                    'edit users',
                    'approve users',
                    'suspend users',
                ],

                'Roles' => [
                    'view roles',
                    'create roles',
                    'edit roles',
                    'delete roles',
                    'assign roles',
                ],

                'Permissions' => [
                    'view permissions',
                    'approve permissions',
                ],

            ],

            'Tenant Management' => [

                'Tenants' => [
                    'view tenants',
                    'create tenants',
                    'edit tenants',
                    'delete tenants',
                ],

                'Packages' => [
                    'view packages',
                    'create packages',
                    'edit packages',
                    'delete packages',
                ],
                'Subscriptions' => [
                    'view subscriptions',
                    'create subscriptions',
                    'edit subscriptions',
                    'delete subscriptions',
                ],
                'Settings' => [
                    'view settings',
                    'edit settings',
                ],

            ],

        ];

        foreach ($permissions as $module => $features) {

            foreach ($features as $feature => $actions) {

                foreach ($actions as $permissionName) {

                    Permission::firstOrCreate(
                        [
                            'name'       => $permissionName,
                            'guard_name' => 'web',
                        ],
                        [
                            'module'     => $module,
                            'feature'    => $feature,
                        ]
                    );
                }
            }
        }
    }
}
