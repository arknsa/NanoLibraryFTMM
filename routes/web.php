<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageBookController;
use App\Http\Controllers\ManagePeminjamanController;
use App\Http\Controllers\ManagePengembalianController;
use App\Http\Controllers\ManagePemesananController;
use App\Http\Controllers\ManageMahasiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;

Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);
Route::get('register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('mhs.index');
})->name('home');

Route::get('/sidebar', function () {
    return view('layouts.admin');
})->name('sbr');

Route::prefix('mhs')->group(function () {

    Route::get('aboutus', function () {
        return view('mhs.aboutus');
    })->name('mhs.aboutus');

    Route::get('/biodata', [MahasiswaController::class, 'showProfile'])->middleware('auth');

    Route::get('detailbuku', function () {
        return view('mhs.detailbuku');
    })->name('mhs.detailbuku');

    Route::get('layananbuku', function () {
        return view('mhs.layananbuku');
    })->name('mhs.layananbuku');

    Route::get('riwayatpeminjaman', function () {
        return view('mhs.riwayatpeminjaman');
    })->name('mhs.riwayatpeminjaman')->middleware('auth');

    Route::get('riwayatpengembalian', function () {
        return view('mhs.riwayatpengembalian');
    })->name('mhs.riwayatpengembalian')->middleware('auth');
});

Route::prefix('adm')->middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('adm.index');
    })->name('home');

    Route::resource('/adm-buku', ManageBookController::class);

    Route::resource('/adm-mahasiswa', ManageMahasiswaController::class);

    // Rute untuk Pemesanan
    Route::get('/pemesanan', [ManagePemesananController::class, 'index'])->name('admin.pemesanan.index');
    Route::get('/pemesanan/pinjamkan/{id}', [ManagePemesananController::class, 'pinjamkan'])->name('admin.pemesanan.pinjamkan');
    // Tambahkan rute lain jika diperlukan

    // Rute untuk Peminjaman
    Route::get('/peminjaman', [ManagePeminjamanController::class, 'index'])->name('admin.peminjaman.index');
    Route::get('/peminjaman/dikembalikan/{id}', [ManagePeminjamanController::class, 'dikembalikan'])->name('admin.peminjaman.dikembalikan');
    // Tambahkan rute lain jika diperlukan

    // Rute untuk Pengembalian
    Route::get('/pengembalian', [ManagePengembalianController::class, 'index'])->name('admin.pengembalian.index');
    // Tambahkan rute lain jika diperlukan
});
