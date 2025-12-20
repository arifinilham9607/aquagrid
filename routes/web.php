<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenggunaController; // PASTIKAN BARIS INI ADA
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// ... rute lainnya ...

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Rute untuk Alert Settings (Tab Tengah)
    Route::get('/alerts', function () {
        return view('alerts');
    })->name('alerts.index');

    // Rute untuk Maintenance Log
    Route::get('/maintenance/create', function () {
        return view('maintenance.create');
    })->name('maintenance.create');

});


// 1. The Route to SHOW the form (Already exists)
Route::get('/maintenance/create', function () {
    return view('maintenance.create');
})->name('maintenance.create');

// 2. NEW Route to HANDLE the form submission (The fix)
Route::post('/maintenance/store', function (Request $request) {
    // For now, we just redirect back with a success message
    // Later, you can add logic to save this to a database
    return redirect()->route('dashboard')->with('success', 'Activity Log submitted successfully!');
})->name('maintenance.store');
// Semua rute di bawah ini hanya bisa diakses jika sudah LOGIN
Route::middleware('auth')->group(function () {
    // Rute bawaan Laravel Breeze untuk Manajemen Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // TAMBAHKAN RUTE CRUD ANDA DI SINI
    // Rute ini otomatis mencakup pengguna.index, pengguna.create, pengguna.store, dll.
    Route::resource('pengguna', PenggunaController::class);
});
Route::get('/View-health', function () {
    return view('view-health');
    })->name('system.health');
Route::get('/guidelines', function () {
    return view('guidelines');
})->name('guidelines');
Route::get('/create', function () {
    return view('create');
})->name('create');
Route::put('/pengguna/{id}', [PenggunaController::class, 'update'])->name('users.update');
require __DIR__.'/auth.php';