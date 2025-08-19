<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('tanggal', '>', now())
                       ->orderBy('tanggal')
                       ->paginate(6);
        
        return view('konser.index', compact('tickets'));
    }

    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);
        $relatedTickets = Ticket::where('id', '!=', $id)
                              ->where('tanggal', '>', now())
                              ->inRandomOrder()
                              ->limit(3)
                              ->get();
        
        return view('konser.detail', compact('ticket', 'relatedTickets'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('q');
        
        $tickets = Ticket::where(function($query) use ($keyword) {
                        $query->where('judul', 'like', "%$keyword%")
                              ->orWhere('lokasi', 'like', "%$keyword%");
                    })
                    ->where('tanggal', '>', now())
                    ->paginate(6)
                    ->withQueryString();
        
        return view('konser.index', compact('tickets', 'keyword'));
    }
}