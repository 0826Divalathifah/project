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
Route::get('/adminwisata', [AdminDesaWisataController::class, 'showDashboard'])->name('admin.adminwisata.adminwisata');
Route::get('/tambahwisata', [AdminDesaWisataController::class, 'tambahWisata'])->name('admin.adminwisata.tambahwisata');
Route::get('/transaksiwisata', [AdminDesaWisataController::class, 'transaksiWisata'])->name('admin.adminwisata.transaksiwisata');
Route::get('/laporanwisata', [AdminDesaWisataController::class, 'laporanWisata'])->name('admin.adminwisata.laporanwisata');
Route::get('/kelolawisata', [AdminDesaWisataController::class, 'kelolaWisata'])->name('admin.adminwisata.kelolawisata');
Route::get('/laporanwisata', [AdminDesaWisataController::class, 'laporanWisata'])->name('admin.adminwisata.laporanpenjual');


// Rute untuk halaman dashboard penjual
Route::get('/penjual', [PenjualController::class, 'showDashboard'])->name('admin.penjual.penjual');
Route::get('/kelolabudaya', [PenjualController::class, 'kelolaBudaya'])->name('admin.penjual.budaya.kelolabudaya');
Route::get('/tambahbudaya', [PenjualController::class, 'tambahBudaya'])->name('admin.penjual.budaya.tambahbudaya');
Route::get('/transaksibudaya', [PenjualController::class, 'transaksiBudaya'])->name('admin.penjual.budaya.transaksibudaya');
Route::get('/laporanbudaya', [PenjualController::class, 'laporanBudaya'])->name('admin.penjual.budaya.laporanbudaya');
Route::get('/tambahpreneur', [PenjualController::class, 'tambahPreneur'])->name('admin.penjual.preneur.tambahpreneur');
Route::get('/transaksipreneur', [PenjualController::class, 'transaksiPreneur'])->name('admin.penjual.preneur.transaksipreneur');
Route::get('/laporanpreneur', [PenjualController::class, 'laporanPreneur'])->name('admin.penjual.preneur.laporanpreneur');
Route::get('/kelolapreneur', [PenjualController::class, 'kelolaPreneur'])->name('admin.penjual.preneur.kelolapreneur');
Route::get('/tambahprima', [PenjualController::class, 'tambahPrima'])->name('admin.penjual.prima.tambahprima');
Route::get('/transaksiprima', [PenjualController::class, 'transaksiPrima'])->name('admin.penjual.prima.transaksiprima');
Route::get('/laporanprima', [PenjualController::class, 'laporanPrima'])->name('admin.penjual.prima.laporanprima');
Route::get('/kelolaprima', [PenjualController::class, 'kelolaPrima'])->name('admin.penjual.prima.kelolaprima');
Route::get('/tambahwisata', [PenjualController::class, 'tambahWisata'])->name('admin.penjual.wisata.tambahwisata');
Route::get('/transaksiwisata', [PenjualController::class, 'transaksiWisata'])->name('admin.penjual.wisata.transaksiwisata');
Route::get('/laporanwisata', [PenjualController::class, 'laporanWisata'])->name('admin.penjual.wisata.laporanwisata');
Route::get('/kelolawisata', [PenjualController::class, 'kelolaWisata'])->name('admin.penjual.wisata.kelolawisata');
Route::get('/laporanpenjual', [PenjualController::class, 'laporanPenjual'])->name('admin.penjual.laporanpenjual');

// Rute untuk Auth
Route::get('/login', [Auth::class, 'login'])->name('admin.adminkelurahan.samples.login');
Route::get('/register', [Auth::class, 'register'])->name('admin.adminkelurahan.samples.register');

