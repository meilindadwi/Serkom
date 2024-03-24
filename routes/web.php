<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/search', [HomeController::class, 'search'])->name('search');

// Route untuk menampilkan halaman admin dan CRUD mahasiswa
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index'); // Menampilkan daftar mahasiswa
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create'); // Menampilkan form tambah mahasiswa
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store'); // Menyimpan data mahasiswa baru
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit'); // Menampilkan form edit mahasiswa
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('admin.update'); // Menyimpan perubahan data mahasiswa
    Route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy'); // Menghapus data mahasiswa
});