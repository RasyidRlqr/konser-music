<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::latest()->paginate(10);
        return view('admin.tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('admin.tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'status' => 'required|in:active,deactive',
        ]);

        $data = $request->only([
            'judul', 'deskripsi', 'tanggal', 
            'lokasi', 'harga', 'status'
        ]);
        
        // Set stok dan stok_awal dari input stock
        $data['stok'] = $request->stock;
        $data['stok_awal'] = $request->stock;

        Ticket::create($data);

        return redirect()->route('tickets.index')
            ->with('success', 'Tiket berhasil ditambahkan!');
    }

    public function show(Ticket $ticket)
    {
        return view('konser.detail', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        return view('admin.tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'stock' => 'required|integer|min:0',
            'lokasi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'status' => 'required|in:active,deactive',
        ]);

        // Update stok dan stok_awal jika stock berubah
        $updateData = $validatedData;
        $updateData['stok'] = $request->stock;
        
        // Hanya update stok_awal jika belum ada atau jika stok bertambah
        if (!$ticket->stok_awal || $request->stock > $ticket->stok_awal) {
            $updateData['stok_awal'] = $request->stock;
        }
        
        // Hapus 'stock' dari array karena tidak ada di database
        unset($updateData['stock']);

        $ticket->update($updateData);

        return redirect()->route('tickets.index')
            ->with('success', 'Tiket berhasil diperbarui!');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return back()->with('success', 'Tiket berhasil dihapus!');
    }

    public function checkout(Ticket $ticket)
    {
        return view('tickets.checkout', compact('ticket'));
    }

    public function pay(Request $request, Ticket $ticket)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email',
            'no_telepon' => 'required|string|max:15',
            'no_ktp' => 'required|string|max:20',
        ]);

        // Cek status tiket
        if ($ticket->status == 'deactive') {
            return back()->with('error', 'Maaf, tiket sudah sold out!');
        }
        
        // Cek stok tersedia
        if ($ticket->stok <= 0) {
            return back()->with('error', 'Maaf, tiket sudah habis!');
        }
        
        // Generate kode unik untuk tiket
        $kode_unik = 'TKT-' . strtoupper(uniqid()) . '-' . $ticket->id;
        
        // Simpan data pembeli dan kurangi stok
        $ticket->update([
            'is_paid' => true,
            'buyer_name' => $request->nama_lengkap,
            'buyer_email' => $request->email,
            'buyer_phone' => $request->no_telepon,
            'buyer_ktp' => $request->no_ktp,
            'checkout_at' => now(),
            'kode_unik' => $kode_unik,
            'user_id' => Auth::id(),
            'stok' => $ticket->stok - 1, // Kurangi stok
        ]);

        return redirect()->route('ticket.success', $ticket->id)
            ->with('success', 'Pembayaran berhasil!');
    }

    public function success(Ticket $ticket)
    {
        return view('tickets.success', compact('ticket'));
    }

    public function downloadPDF(Ticket $ticket)
    {
        $pdf = Pdf::loadView('tickets.pdf', compact('ticket'));
        return $pdf->download('tiket-'.$ticket->judul.'-'.now()->format('Ymd').'.pdf');
    }
}