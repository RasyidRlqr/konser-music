<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $konser = [
            ['judul' => 'Jazz Night', 'tanggal' => '2025-06-01', 'lokasi' => 'Yogyakarta', 'harga' => 'Rp150.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,jazz'],
            ['judul' => 'Rock Festival', 'tanggal' => '2025-06-05', 'lokasi' => 'Jakarta', 'harga' => 'Rp250.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,rock'],
            ['judul' => 'Pop Stars', 'tanggal' => '2025-06-10', 'lokasi' => 'Bandung', 'harga' => 'Rp200.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,pop'],
            ['judul' => 'EDM Party', 'tanggal' => '2025-06-15', 'lokasi' => 'Bali', 'harga' => 'Rp300.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,edm'],
            ['judul' => 'Classic Evening', 'tanggal' => '2025-06-20', 'lokasi' => 'Surabaya', 'harga' => 'Rp180.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,classical'],
            ['judul' => 'Indie Vibes', 'tanggal' => '2025-06-25', 'lokasi' => 'Medan', 'harga' => 'Rp120.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,indie'],
        ];

        // Ambil 4 konser untuk ditampilkan di home
        $konserHome = array_slice($konser, 0, 4);

        return view('home', compact('konserHome'));
    }

    public function konser()
    {
        $konser = [
            ['judul' => 'Jazz Night', 'tanggal' => '2025-06-01', 'lokasi' => 'Yogyakarta', 'harga' => 'Rp150.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,jazz'],
            ['judul' => 'Rock Festival', 'tanggal' => '2025-06-05', 'lokasi' => 'Jakarta', 'harga' => 'Rp250.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,rock'],
            ['judul' => 'Pop Stars', 'tanggal' => '2025-06-10', 'lokasi' => 'Bandung', 'harga' => 'Rp200.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,pop'],
            ['judul' => 'EDM Party', 'tanggal' => '2025-06-15', 'lokasi' => 'Bali', 'harga' => 'Rp300.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,edm'],
            ['judul' => 'Classic Evening', 'tanggal' => '2025-06-20', 'lokasi' => 'Surabaya', 'harga' => 'Rp180.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,classical'],
            ['judul' => 'Indie Vibes', 'tanggal' => '2025-06-25', 'lokasi' => 'Medan', 'harga' => 'Rp120.000', 'gambar' => 'https://source.unsplash.com/600x400/?concert,indie'],
        ];

        return view('konser', compact('konser'));
    }

    public function kontak()
    {
        return view('kontak');
    }
     public function artis()
    {
        return view('artis');
    }
}
