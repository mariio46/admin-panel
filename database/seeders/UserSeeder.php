<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = collect([
            [
                'name' => $name = 'Mario',
                'username' => getFirstName($name) . '46_',
                'email' => 'mariomad2296@gmail.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ],
            [
                'name' => $name = 'Fitra',
                'username' => getFirstName($name) . '46_',
                'email' => 'fitra@gmail.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ],
            [
                'name' => $name = 'Wira',
                'username' => getFirstName($name) . mt_rand(11111, 99999),
                'email' => 'wira@gmail.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ],
        ]);

        $users->each(fn ($user) => User::create($user));
    }
}
