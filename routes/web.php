<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AnalisisController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

Route::get('/barang/kategori/{nama}', [BarangController::class, 'kategori'])->name('barang.kategori');

Route::get('/barang/{id}', [BarangController::class, 'detail'])->name('barang.detail');

Route::get('/analisis', [AnalisisController::class, 'index'])->name('analisis.index');

Route::get('/rekomendasi', [AnalisisController::class, 'rekomendasi'])->name('analisis.rekomendasi');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
