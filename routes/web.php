<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminKelurahan;
use App\Http\Controllers\AdminDesaBudaya;
use App\Http\Controllers\Search;

// Routes untuk Website
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/desabudaya', [PageController::class, 'desabudaya'])->name('desabudaya');
Route::get('/desaprima', [PageController::class, 'desaprima'])->name('desaprima');
Route::get('/desapreneur', [PageController::class, 'desapreneur'])->name('desapreneur');
Route::get('/desawisata', [PageController::class, 'desawisata'])->name('desawisata');
Route::get('/detail_kesenian', [PageController::class, 'detail_kesenian'])->name('detail_kesenian');
Route::get('/detail_produk', [PageController::class, 'detail_produk'])->name('detail_produk');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/transaksi', [PageController::class, 'transaksi'])->name('transaksi');


// Rute untuk halaman dashboard admin kelurahan
Route::get('/adminkelurahan', [AdminKelurahan::class, 'showDashboard'])->name('admin.adminkelurahan.adminkelurahan');
Route::get('/chartjs', [AdminKelurahan::class, 'chartjs'])->name('admin.adminkelurahan.charts.chartjs');
Route::get('/basic_elements', [AdminKelurahan::class, 'basic_elements'])->name('admin.adminkelurahan.forms.basic_elements');

//Rute untuk halaman dashboard admin budaya
Route::get('/adminbudaya', [AdminDesaBudaya::class, 'showDashboard'])->name('admin.adminbudaya.adminbudaya');

// Rute untuk search
Route::get('/search', [Search::class, 'search'])->name('search');



