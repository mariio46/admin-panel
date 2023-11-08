<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        collect([
            'super admin',
            'admin',
            'operator',
        ])->each(fn ($role) => Role::create(['name' => $role]));

        User::find(1)->assignRole('super admin');
        User::find(2)->assignRole('admin');
        User::find(3)->assignRole('operator');
    }
}
