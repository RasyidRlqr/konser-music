<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdmDashboardController;
use App\Http\Middleware\IsAdmin;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

// Concert Routes
Route::controller(ConcertController::class)->group(function () {
    Route::get('/konser', 'index')->name('konser');
    Route::get('/konser/{ticket}', 'show')->name('konser.detail');
    Route::get('/konser/search', 'search')->name('konser.search');
});

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
});

// Admin Routes
Route::middleware(['auth', IsAdmin::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdmDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('tickets', TicketController::class);
});

// Debug Routes (optional)
Route::get('/debug-middleware', function() {
    dd(
        app(\Illuminate\Contracts\Http\Kernel::class)->getMiddlewareGroups(),
        app(\Illuminate\Contracts\Http\Kernel::class)->getRouteMiddleware()
    );
})->middleware('web');

// Auth Routes
require __DIR__.'/auth.php';