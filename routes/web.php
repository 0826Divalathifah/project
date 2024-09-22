<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminKelurahan;
use App\Http\Controllers\AdminDesaBudaya;
use App\Http\Controllers\AdminDesaPreneur;
use App\Http\Controllers\AdminDesaPrima;
use App\Http\Controllers\AdminDesaWisata;
use App\Http\Controllers\Penjual;
use App\Http\Controllers\Auth;

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


// Rute untuk halaman dashboard superadmin kelurahan
Route::get('/adminkelurahan', [AdminKelurahan::class, 'showDashboard'])->name('admin.adminkelurahan.adminkelurahan');
Route::get('/buttons', [AdminKelurahan::class, 'uifeatures1'])->name('admin.adminkelurahan.ui-features.buttons');
Route::get('/dropdowns', [AdminKelurahan::class, 'uifeatures2'])->name('admin.adminkelurahan.ui-features.dropdowns');
Route::get('/typography', [AdminKelurahan::class, 'uifeatures3'])->name('admin.adminkelurahan.ui-features.typography');
Route::get('/chartjs', [AdminKelurahan::class, 'charts'])->name('admin.adminkelurahan.charts.chartjs');
Route::get('/basic_elements', [AdminKelurahan::class, 'forms'])->name('admin.adminkelurahan.forms.basic_elements');
Route::get('/basic-table', [AdminKelurahan::class, 'tables'])->name('admin.adminkelurahan.tables.basic-table');
Route::get('/mdi', [AdminKelurahan::class, 'icons'])->name('admin.adminkelurahan.icons.mdi');
Route::get('/error-404', [AdminKelurahan::class, 'samples1'])->name('admin.adminkelurahan.samples.error-404');
Route::get('/error-500', [AdminKelurahan::class, 'samples2'])->name('admin.adminkelurahan.samples.error-500');
Route::get('/documentation', [AdminKelurahan::class, 'docs'])->name('admin.adminkelurahan.docs.documentation');

//Rute untuk halaman dashboard admin budaya
Route::get('/adminbudaya', [AdminDesaBudaya::class, 'showDashboard'])->name('admin.adminbudaya.adminbudaya');
Route::get('/buttons', [AdminDesaBudaya::class, 'uifeatures1'])->name('admin.adminbudaya.ui-features.buttons');
Route::get('/dropdowns', [AdminDesaBudaya::class, 'uifeatures2'])->name('admin.adminbudaya.ui-features.dropdowns');
Route::get('/typography', [AdminDesaBudaya::class, 'uifeatures3'])->name('admin.adminbudaya.ui-features.typography');
Route::get('/chartjs', [AdminDesaBudaya::class, 'charts'])->name('admin.adminbudaya.charts.chartjs');
Route::get('/basic_elements', [AdminDesaBudaya::class, 'forms'])->name('admin.adminbudaya.forms.basic_elements');
Route::get('/basic-table', [AdminDesaBudaya::class, 'tables'])->name('admin.adminbudaya.tables.basic-table');
Route::get('/mdi', [AdminDesaBudaya::class, 'icons'])->name('admin.adminbudaya.icons.mdi');
Route::get('/error-404', [AdminDesaBudaya::class, 'samples1'])->name('admin.dminbudaya.samples.error-404');
Route::get('/error-500', [AdminDesaBudaya::class, 'samples2'])->name('admin.adminbudaya.samples.error-500');
Route::get('/documentation', [AdminDesaBudaya::class, 'docs'])->name('admin.adminbudaya.docs.documentation');

//Rute untuk halaman dashboard admin preneur
Route::get('/adminpreneur', [AdminDesaPreneur::class, 'showDashboard'])->name('admin.adminpreneur.adminpreneur');
Route::get('/buttons', [AdminDesaPreneur::class, 'uifeatures1'])->name('admin.adminpreneur.ui-features.buttons');
Route::get('/dropdowns', [AdminDesaPreneur::class, 'uifeatures2'])->name('admin.adminpreneur.ui-features.dropdowns');
Route::get('/typography', [AdminDesaPreneur::class, 'uifeatures3'])->name('admin.adminpreneur.ui-features.typography');
Route::get('/chartjs', [AdminDesaPreneur::class, 'charts'])->name('admin.adminpreneur.charts.chartjs');
Route::get('/basic_elements', [AdminDesaPreneur::class, 'forms'])->name('admin.adminpreneur.forms.basic_elements');
Route::get('/basic-table', [AdminDesaPreneur::class, 'tables'])->name('admin.adminpreneur.tables.basic-table');
Route::get('/mdi', [AdminDesaPreneur::class, 'icons'])->name('admin.adminbudaya.icons.mdi');
Route::get('/error-404', [AdminDesaPreneur::class, 'samples1'])->name('admin.adminpreneur.samples.error-404');
Route::get('/error-500', [AdminDesaPreneur::class, 'samples2'])->name('admin.adminpreneur.samples.error-500');
Route::get('/documentation', [AdminDesaPreneur::class, 'docs'])->name('admin.adminpreneur.docs.documentation');

//Rute untuk halaman dashboard admin prima
Route::get('/adminprima', [AdminDesaPrima::class, 'showDashboard'])->name('admin.adminprima.adminprima');
Route::get('/buttons', [AdminDesaPrima::class, 'uifeatures1'])->name('admin.adminprima.ui-features.buttons');
Route::get('/dropdowns', [AdminDesaPrima::class, 'uifeatures2'])->name('admin.adminprima.ui-features.dropdowns');
Route::get('/typography', [AdminDesaPrima::class, 'uifeatures3'])->name('admin.adminprima.ui-features.typography');
Route::get('/chartjs', [AdminDesaPrima::class, 'charts'])->name('admin.adminprima.charts.chartjs');
Route::get('/basic_elements', [AdminDesaPrima::class, 'forms'])->name('admin.adminprima.forms.basic_elements');
Route::get('/basic-table', [AdminDesaPrima::class, 'tables'])->name('admin.adminprima.tables.basic-table');
Route::get('/mdi', [AdminDesaPrima::class, 'icons'])->name('admin.adminprima.icons.mdi');
Route::get('/error-404', [AdminDesaPrima::class, 'samples1'])->name('admin.adminprima.samples.error-404');
Route::get('/error-500', [AdminDesaPrima::class, 'samples2'])->name('admin.adminprima.samples.error-500');
Route::get('/documentation', [AdminDesaPrima::class, 'docs'])->name('admin.adminprima.docs.documentation');

//Rute untuk halaman dashboard admin wisata
Route::get('/adminwisata', [AdminDesaWisata::class, 'showDashboard'])->name('admin.adminwisata.adminwisata');
Route::get('/buttons', [AdminDesaWisata::class, 'uifeatures1'])->name('admin.adminwisata.ui-features.buttons');
Route::get('/dropdowns', [AdminDesaWisata::class, 'uifeatures2'])->name('admin.adminwisata.ui-features.dropdowns');
Route::get('/typography', [AdminDesaWisata::class, 'uifeatures3'])->name('admin.adminwisata.ui-features.typography');
Route::get('/chartjs', [AdminDesaWisata::class, 'charts'])->name('admin.adminwisata.charts.chartjs');
Route::get('/basic_elements', [AdminDesaWisata::class, 'forms'])->name('admin.adminwisata.forms.basic_elements');
Route::get('/basic-table', [AdminDesaWisata::class, 'tables'])->name('admin.adminwisata.tables.basic-table');
Route::get('/mdi', [AdminDesaWisata::class, 'icons'])->name('admin.adminwisata.icons.mdi');
Route::get('/error-404', [AdminDesaWisata::class, 'samples1'])->name('admin.adminwisata.samples.error-404');
Route::get('/error-500', [AdminDesaWisata::class, 'samples2'])->name('admin.adminwisata.samples.error-500');
Route::get('/documentation', [AdminDesaWisata::class, 'docs'])->name('admin.adminwisata.docs.documentation');

//Rute untuk halaman dashboard penjual
Route::get('/penjual', [Penjual::class, 'showDashboard'])->name('admin.penjual.penjual');
Route::get('/tambahbudaya', [Penjual::class, 'tambahbudaya'])->name('admin.penjual.budaya.tambahbudaya');
Route::get('/transaksibudaya', [Penjual::class, 'transaksibudaya'])->name('admin.penjual.budaya.transaksibudaya');
Route::get('/laporanbudaya', [Penjual::class, 'laporanbudaya'])->name('admin.penjual.budaya.laporanbudaya');
Route::get('/tambahpreneur', [Penjual::class, 'tambahpreneur'])->name('admin.penjual.preneur.tambahpreneur');
Route::get('/transaksipreneur', [Penjual::class, 'transaksipreneur'])->name('admin.penjual.preneur.transaksipreneur');
Route::get('/laporanpreneur', [Penjual::class, 'laporanpreneur'])->name('admin.penjual.preneur.laporanpreneur');Route::get('/tambahprima', [Penjual::class, 'tambahprima'])->name('admin.penjual.prima.tambahprima');
Route::get('/transaksiprima', [Penjual::class, 'transaksiprima'])->name('admin.penjual.prima.transaksiprima');
Route::get('/laporanprima', [Penjual::class, 'laporanprima'])->name('admin.penjual.prima.laporanprima');
Route::get('/tambahwisata', [Penjual::class, 'tambahwisata'])->name('admin.penjual.wisata.tambahwisata');
Route::get('/transaksiwisata', [Penjual::class, 'transaksiwisata'])->name('admin.penjual.wisata.transaksiwisata');
Route::get('/laporanwisata', [Penjual::class, 'laporanwisata'])->name('admin.penjual.wisata.laporanwisata');

// Rute untuk Auth
Route::get('/login', [Auth::class, 'login'])->name('admin.adminkelurahan.samples.login');
Route::get('/register', [Auth::class, 'register'])->name('admin.adminkelurahan.samples.register');

