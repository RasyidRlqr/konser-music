<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class AdminController extends Controller
{
    // Menampilkan daftar tiket
    public function index()
    {
        $tickets = Ticket::all();
        return view('admin.dashboard', compact('tickets'));
    }

    // Form untuk tambah tiket
    public function create()
    {
        return view('admin.create');
    }

    // Simpan tiket baru ke database
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'tanggal' => 'required|date',
        'lokasi' => 'required|string',
        'harga' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'status' => 'required|in:active,inactive',
    ]);

    // Tambahkan 'deskripsi' ke dalam $data
    $data = $request->only([
        'judul',
        'deskripsi',
        'tanggal',
        'lokasi',
        'harga',
        'stock',
        'status'
    ]);

    Ticket::create($data);

    return redirect()->route('tickets.index')
        ->with('success', 'Tiket berhasil ditambahkan!');
}

    // Form edit tiket
    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('admin.edit', compact('ticket'));
    }

    // Update data tiket
    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        $ticket->update($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket berhasil diperbarui.');
    }

    // Hapus tiket
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('tickets.index')->with('success', 'Ticket berhasil dihapus.');
    }
}
