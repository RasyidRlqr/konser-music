<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    \App\Models\Ticket::create([
        'judul' => 'Konser Contoh',
        'deskripsi' => 'Deskripsi konser contoh',
        'tanggal' => now()->addWeek(),
        'lokasi' => 'Jakarta Convention Center',
        'harga' => 500000,
        'stock' => 100,
        'status' => 'active',
        // Kolom baru
        'buyer_name' => null,
        'buyer_email' => null,
        'buyer_phone' => null,
        'buyer_ktp' => null,
        'is_paid' => false
    ]);
        // Jalankan seeder admin
        $this->call([
            AdminUserSeeder::class,
        ]);

        // Buat user biasa hanya jika belum ada
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }
    }
}
