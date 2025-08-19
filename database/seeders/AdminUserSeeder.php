<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
    'name' => 'Admin Zona Musik',
    'email' => 'admin@zonamusik.com',
    'password' => Hash::make('password'),
    'role' => 'admin',
    'phone' => '081234567890',
    'address' => 'Jl. Admin No. 1, Jakarta'
]);


    }
}
