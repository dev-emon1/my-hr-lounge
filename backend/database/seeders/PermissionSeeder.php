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

                'Audit & Logs' => [
                    'view audit logs',
                    'view login history',
                ],

            ],

            'System Management' => [

                'System Settings' => [
                    'view system settings',
                    'edit system settings',
                ],

                'Integrations' => [
                    'view integrations',
                    'manage integrations',
                ],

            ],

            'Reporting & Analytics' => [

                'Reports' => [
                    'view reports',
                    'generate reports',
                ],

            ],

            'Support & Maintenance' => [

                'Support Tickets' => [
                    'view support tickets',
                    'manage support tickets',
                ],

                'System Health' => [
                    'view system health',
                ],

            ],

            'Security & Compliance' => [

                'Security Settings' => [
                    'view security settings',
                    'edit security settings',
                ],

                'Compliance' => [
                    'view compliance reports',
                ],

            ],

            'Developer & API Access' => [

                'API Access' => [
                    'view API access',
                    'manage API access',
                ],

                'Developer Tools' => [
                    'view developer tools',
                    'manage developer tools',
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

            'Companay Management' => [

                'Company Settings' => [
                    'view company settings',
                    'edit company settings',
                ],

                'Branches' => [
                    'view branches',
                    'manage branches',
                ],

            ],

            'Employee Management' => [

                'Employees' => [
                    'view employees',
                    'manage employees',
                ],

                'Departments' => [
                    'view departments',
                    'manage departments',
                ],

            ],

            // ''

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
