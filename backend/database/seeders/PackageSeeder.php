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

                'max_employees' => 25,
                'max_admins' => 1,
                'device_limit' => 2,
                'max_branches' => 1,
                'department_limit' => 5,
                'storage_limit_gb' => 5,

                'modules' => [
                    'employee_management' => true,
                    'attendance' => true,
                    'leave_management' => true,
                    'payroll' => false,
                    'recruitment' => false,
                    'performance_management' => false,
                ],

                'is_active' => true,
            ],

            [
                'name' => 'Business',
                'slug' => 'business',
                'description' => 'Ideal for growing companies.',

                'price_monthly' => 29.99,
                'price_yearly'  => 299.99,

                'max_employees' => 100,
                'max_admins' => 5,
                'device_limit' => 10,
                'max_branches' => 5,
                'department_limit' => 20,
                'storage_limit_gb' => 50,

                'modules' => [
                    'employee_management' => true,
                    'attendance' => true,
                    'leave_management' => true,
                    'payroll' => true,
                    'recruitment' => true,
                    'performance_management' => false,
                ],

                'is_active' => true,
            ],

            [
                'name' => 'Enterprise',
                'slug' => 'enterprise',
                'description' => 'Full-featured enterprise HRM package.',

                'price_monthly' => 99.99,
                'price_yearly'  => 999.99,

                'max_employees' => 1000,
                'max_admins' => 50,
                'device_limit' => 100,
                'max_branches' => 50,
                'department_limit' => 100,
                'storage_limit_gb' => 500,

                'modules' => [
                    'employee_management' => true,
                    'attendance' => true,
                    'leave_management' => true,
                    'payroll' => true,
                    'recruitment' => true,
                    'performance_management' => true,
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
