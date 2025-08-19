<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;

class AdmDashboardController extends Controller
{
    public function index()
{
    $totalTickets = \App\Models\Ticket::count();
    $activeTickets = \App\Models\Ticket::where('status', 'active')->count();
    $revenue = \App\Models\Ticket::sum('harga');
    $tickets = \App\Models\Ticket::paginate(10); // <--- Paginasi diaktifkan

    return view('admin.dashboard', compact('totalTickets', 'activeTickets', 'revenue', 'tickets'));
}

}
