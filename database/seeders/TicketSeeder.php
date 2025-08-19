<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TicketSeeder extends Seeder
{
    public function run()
{
    $konser = [
        [
            'judul' => 'Festival Musik Pantai 2023',
            'tanggal' => now()->addDays(15),
            'lokasi' => 'Pantai Sanur, Bali',
            'harga' => 350000,
        ],
        [
            'judul' => 'Java Rockin\' Land',
            'tanggal' => now()->addDays(30),
            'lokasi' => 'Pantai Karnaval, Jakarta',
            'harga' => 750000,
        ],
        // Tambahkan 5 data lainnya...
    ];

    foreach ($konser as $data) {
        Ticket::create($data);
    }
}
}