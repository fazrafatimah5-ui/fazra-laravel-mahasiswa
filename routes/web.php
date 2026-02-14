<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
// use App\Http\Controllers\LatihanController; // Nyalakan jika file controllernya ada

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. ROUTE HALAMAN UTAMA (HOMEPAGE)
// Kita pakai yang paling lengkap (mengirim data nama)
Route::get('/', function () {
    return view('welcome', ['nama' => 'Evan Ridwan']);
});

// 2. ROUTE RESOURCE MAHASISWA (CRUD LENGKAP)
// Satu baris ini otomatis bikin route: index, create, store, show, edit, update, destroy
Route::resource('mahasiswa', MahasiswaController::class);

// 3. ROUTE LATIHAN (Opsional)
// Route::get('/latihan', [LatihanController::class, 'index']);