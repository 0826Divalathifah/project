<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminKelurahanController;
use App\Http\Controllers\AdminDesaBudayaController;
use App\Http\Controllers\AdminDesaPreneurController;
use App\Http\Controllers\AdminDesaPrimaController;
use App\Http\Controllers\AdminDesaWisataController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\Auth;

// Routes untuk Website
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/desabudaya', [PageController::class, 'desabudaya'])->name('desabudaya');
Route::get('/desaprima', [PageController::class, 'desaprima'])->name('desaprima');
Route::get('/desapreneur', [PageController::class, 'desapreneur'])->name('desapreneur');
Route::get('/desawisata', [PageController::class, 'desawisata'])->name('desawisata');
Route::match(['get', 'post'], '/detail_budaya', [PageController::class, 'detail_budaya'])->name('detail_budaya');
Route::get('/detail_produk', [PageController::class, 'detail_produk'])->name('detail_produk');
Route::get('/detail_wisata', [PageController::class, 'detail_wisata'])->name('detail_wisata');
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
// Route untuk menampilkan daftar budaya
Route::get('/daftarbudaya', [AdminDesaBudayaController::class, 'daftarBudaya'])->name('admin.adminbudaya.daftarbudaya');
Route::get('/admin/adminbudaya/tambah', [AdminDesaBudayaController::class, 'createBudaya'])->name('admin.adminbudaya.tambahbudaya');
Route::post('/admin/adminbudaya/store', [AdminDesaBudayaController::class, 'storeBudaya'])->name('admin.adminbudaya.store');
Route::get('/admin/adminbudaya/edit/{id}', [AdminDesaBudayaController::class, 'editBudaya'])->name('admin.adminbudaya.edit');
Route::put('/admin/adminbudaya/update/{id}', [AdminDesaBudayaController::class, 'updateBudaya'])->name('admin.adminbudaya.update');
Route::delete('/admin/adminbudaya/delete/{id}', [AdminDesaBudayaController::class, 'deleteBudaya'])->name('admin.adminbudaya.delete');


//Rute untuk halaman dashboard admin preneur
Route::get('/adminpreneur', [AdminDesaPreneurController::class, 'showDashboard'])->name('admin.adminpreneur.adminpreneur');
Route::get('/tambahpreneur', [AdminDesaPreneurController::class, 'tambahPreneur'])->name('admin.adminpreneur.tambahpreneur');
Route::get('/transaksipreneur', [AdminDesaPreneurController::class, 'transaksiPreneur'])->name('admin.adminpreneur.transaksipreneur');
Route::get('/laporanpreneur', [AdminDesaPreneurController::class, 'laporanPreneur'])->name('admin.adminpreneur.laporanpreneur');
Route::get('/kelolapreneur', [AdminDesaPreneurController::class, 'kelolaPreneur'])->name('admin.adminpreneur.kelolapreneur');

//Rute untuk halaman dashboard admin prima
Route::get('/adminprima', [AdminDesaPrimaController::class, 'showDashboard'])->name('admin.adminprima.adminprima');
Route::get('/tambahprima', [AdminDesaPrimaController::class, 'tambahPrima'])->name('admin.adminprima.prima.tambahprima');
Route::get('/transaksiprima', [AdminDesaPrimaController::class, 'transaksiPrima'])->name('admin.adminprima.transaksiprima');
Route::get('/laporanprima', [AdminDesaPrimaController::class, 'laporanPrima'])->name('admin.adminprima.laporanprima');
Route::get('/kelolaprima', [AdminDesaPrimaController::class, 'kelolaPrima'])->name('admin.adminprima.kelolaprima');

//Rute untuk halaman dashboard admin wisata
Route::get('/adminwisata', [AdminDesaWisataController::class, 'showDashboard'])->name('admin.adminwisata.adminwisata');
Route::get('/tambahwisata', [AdminDesaWisataController::class, 'tambahWisata'])->name('admin.adminwisata.tambahwisata');
Route::get('/transaksiwisata', [AdminDesaWisataController::class, 'transaksiWisata'])->name('admin.adminwisata.transaksiwisata');
Route::get('/laporanwisata', [AdminDesaWisataController::class, 'laporanWisata'])->name('admin.adminwisata.laporanwisata');
Route::get('/kelolawisata', [AdminDesaWisataController::class, 'kelolaWisata'])->name('admin.adminwisata.kelolawisata');
Route::get('/laporanwisata', [AdminDesaWisataController::class, 'laporanWisata'])->name('admin.adminwisata.laporanpenjual');


// Rute untuk halaman dashboard penjual
//Route::get('/penjual', [PenjualController::class, 'showDashboard'])->name('admin.penjual.penjual');
//Route::get('/kelolabudaya', [PenjualController::class, 'kelolaBudaya'])->name('admin.penjual.budaya.kelolabudaya');
//Route::get('/tambahbudaya', [PenjualController::class, 'tambahBudaya'])->name('admin.penjual.budaya.tambahbudaya');
//Route::get('/transaksibudaya', [PenjualController::class, 'transaksiBudaya'])->name('admin.penjual.budaya.transaksibudaya');
//Route::get('/laporanbudaya', [PenjualController::class, 'laporanBudaya'])->name('admin.penjual.budaya.laporanbudaya');
//Route::get('/tambahpreneur', [PenjualController::class, 'tambahPreneur'])->name('admin.penjual.preneur.tambahpreneur');
//Route::get('/transaksipreneur', [PenjualController::class, 'transaksiPreneur'])->name('admin.penjual.preneur.transaksipreneur');
//Route::get('/laporanpreneur', [PenjualController::class, 'laporanPreneur'])->name('admin.penjual.preneur.laporanpreneur');
//Route::get('/kelolapreneur', [PenjualController::class, 'kelolaPreneur'])->name('admin.penjual.preneur.kelolapreneur');
//Route::get('/tambahprima', [PenjualController::class, 'tambahPrima'])->name('admin.penjual.prima.tambahprima');
//Route::get('/transaksiprima', [PenjualController::class, 'transaksiPrima'])->name('admin.penjual.prima.transaksiprima');
//Route::get('/laporanprima', [PenjualController::class, 'laporanPrima'])->name('admin.penjual.prima.laporanprima');
//Route::get('/kelolaprima', [PenjualController::class, 'kelolaPrima'])->name('admin.penjual.prima.kelolaprima');
//Route::get('/tambahwisata', [PenjualController::class, 'tambahWisata'])->name('admin.penjual.wisata.tambahwisata');
//Route::get('/transaksiwisata', [PenjualController::class, 'transaksiWisata'])->name('admin.penjual.wisata.transaksiwisata');
//Route::get('/laporanwisata', [PenjualController::class, 'laporanWisata'])->name('admin.penjual.wisata.laporanwisata');
//Route::get('/kelolawisata', [PenjualController::class, 'kelolaWisata'])->name('admin.penjual.wisata.kelolawisata');
//Route::get('/laporanpenjual', [PenjualController::class, 'laporanPenjual'])->name('admin.penjual.laporanpenjual');

// Rute untuk Auth
Route::get('/login', [Auth::class, 'login'])->name('admin.adminkelurahan.samples.login');
Route::get('/register', [Auth::class, 'register'])->name('admin.adminkelurahan.samples.register');

