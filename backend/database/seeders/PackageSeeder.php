<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Central\Package;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [

            [
                'name' => 'Starter',
                'slug' => 'starter',
                'description' => 'Suitable for small businesses and startups.',

                'price_monthly' => 9.99,
                'price_yearly'  => 99.99,
                
                'modules' => [
                    'Employee_management' => true,
                    'Attendance' => true,
                    'Leave_management' => true,
                    'Payroll' => false,
                    'Recruitment' => false,
                    'Performance_management' => false,
                    ],

                    'limits' => [
                        'employees' => 15,
                        'admins' => 2,
                        'department_limit' => 4,
                        'branches' => 1,
                        'storage_gb' => 50,
                        'device_limit' => 2,
                ],

                'integrations' => [
                    'zkteco' => true,
                    'api_access' => false,
                    'whatsapp' => false,
                ],

                'is_active' => true,
            ],

            [
                'name' => 'Business',
                'slug' => 'business',
                'description' => 'Ideal for growing companies.',

                'price_monthly' => 29.99,
                'price_yearly'  => 299.99,
                
                'modules' => [
                    'Employee_management' => true,
                    'Attendance' => true,
                    'Leave_management' => true,
                    'Payroll' => true,
                    'Recruitment' => true,
                    'Performance_management' => false,
                ],
                
                'limits' => [
                    'employees' => 100,
                    'admins' => 5,
                    'department_limit' => 10,
                    'branches' => 5,
                    'storage_gb' => 100,
                    'device_limit' => 10,
                ],

                'integrations' => [
                    'zkteco' => true,
                    'api_access' => true,
                    'whatsapp' => false,
                ],

                'is_active' => true,
            ],

            [
                'name' => 'Enterprise',
                'slug' => 'enterprise',
                'description' => 'Full-featured enterprise HRM package.',

                'price_monthly' => 99.99,
                'price_yearly'  => 999.99,

                'modules' => [
                    'Employee_management' => true,
                    'Attendance' => true,
                    'Leave_management' => true,
                    'Payroll' => true,
                    'Recruitment' => true,
                    'Performance_management' => true,
                ],

                'limits' => [
                    'employees' => 1000,
                    'admins' => 50,
                    'department_limit' => 30,
                    'branches' => 50,
                    'storage_gb' => 500,
                    'device_limit' => 100,
                ],

                'integrations' => [
                    'zkteco' => true,
                    'api_access' => true,
                    'whatsapp' => true,
                ],

                'is_active' => true,
            ],
        ];

        foreach ($packages as $package) {
            Package::updateOrCreate(
                ['slug' => $package['slug']],
                $package
            );
        }
    }
}
