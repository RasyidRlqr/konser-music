<?php

namespace Database\Seeders;  // tambahkan namespace ini

use Illuminate\Database\Seeder; //
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin Zona Musik',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'phone' => '081234567890',
            'address' => 'Jl. Admin No. 1, Jakarta',
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone' => '082345678901',
            'address' => 'Jl. User No. 2, Jakarta',
        ]);

        User::factory(10)->create();
    }
}
