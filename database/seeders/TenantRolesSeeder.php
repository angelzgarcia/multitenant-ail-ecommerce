<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class TenantRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'client', 'guard_name' => 'tenant']);
        Role::create(['name' => 'accountant', 'guard_name' => 'tenant']);
        Role::create(['name' => 'warehouse', 'guard_name' => 'tenant']);
        Role::create(['name' => 'guest', 'guard_name' => 'tenant']);
    }
}
