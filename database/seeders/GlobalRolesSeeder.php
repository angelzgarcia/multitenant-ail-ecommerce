<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class GlobalRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        config(['database.default' => 'global']);

        Role::create(['name' => 'admin', 'guard_name' => 'web']);
        Role::create(['name' => 'seller', 'guard_name' => 'web']);
        Role::create(['name' => 'support', 'guard_name' => 'web']);
    }
}
