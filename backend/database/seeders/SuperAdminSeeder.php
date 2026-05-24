<?php

namespace Database\Seeders;

use App\Models\Central\SuperAdmin;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        SuperAdmin::create([
            'name'     => 'Super Admin',
            'email'    => 'admin@myhrlounge.com',
            'password' => bcrypt('Admin@12345'),
            'status'   => 'active',
        ]);

        $this->command->info('Super Admin created successfully.');
        $this->command->info('Email: admin@myhrlounge.com');
        $this->command->info('Password: Admin@12345');
    }
}