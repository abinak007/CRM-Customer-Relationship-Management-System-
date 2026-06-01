<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'Administrator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Customer Care Executive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Sales Executive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}