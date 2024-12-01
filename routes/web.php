<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminKalurahanController;
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
Route::get('/detail_budaya/{id}', [PageController::class, 'detail_budaya']);
Route::get('/desaprima', [PageController::class, 'desaprima'])->name('desaprima');
Route::get('/desapreneur', [PageController::class, 'desapreneur'])->name('desapreneur');
Route::get('/desawisata', [PageController::class, 'desawisata'])->name('desawisata');
Route::get('/detail_produk', [PageController::class, 'detail_produk'])->name('detail_produk');
Route::get('/detail_wisata/{id}', [PageController::class, 'detail_wisata']);
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/simpanFeedback', [PageController::class, 'simpanFeedback'])->name('simpanFeedback');
Route::get('/transaksi', [PageController::class, 'transaksi'])->name('transaksi');

// Rute untuk halaman dashboard superadmin krahan
Route::get('/adminkalurahan', [AdminKalurahanController::class, 'showDashboard'])->name('admin.adminkalurahan.adminkalurahan');
Route::get('/buttons', [AdminKalurahanController::class, 'uifeatures1'])->name('admin.adminkalurahan.ui-features.buttons');
Route::get('/dropdowns', [AdminKalurahanController::class, 'uifeatures2'])->name('admin.adminkalurahan.ui-features.dropdowns');
Route::get('/typography', [AdminKalurahanController::class, 'uifeatures3'])->name('admin.adminkalurahan.ui-features.typography');
Route::get('/chartjs', [AdminKalurahanController::class, 'charts'])->name('admin.adminkalurahan.charts.chartjs');
Route::get('/basic_elements', [AdminKalurahanController::class, 'forms'])->name('admin.adminkalurahan.forms.basic_elements');
Route::get('/basic-table', [AdminKalurahanController::class, 'tables'])->name('admin.adminkalurahan.tables.basic-table');
Route::get('/mdi', [AdminKalurahanController::class, 'icons'])->name('admin.adminkalurahan.icons.mdi');
Route::get('/error-404', [AdminKalurahanController::class, 'samples1'])->name('admin.adminkalurahan.samples.error-404');
Route::get('/error-500', [AdminKalurahanController::class, 'samples2'])->name('admin.adminkalurahan.samples.error-500');
Route::get('/documentation', [AdminKalurahanController::class, 'docs'])->name('admin.adminkalurahan.docs.documentation');
// Rute untuk halaman dashboard superadmin kalurahan
Route::get('/adminkalurahan', [AdminKalurahanController::class, 'showDashboard']);
Route::get('/kelolahomepage', [AdminKalurahanController::class, 'kelolahomepage']);
Route::post('/update-homepage-kalurahan', [AdminKalurahanController::class, 'updateHomepageKalurahan']);
Route::get('/tambahadmin', [AdminKalurahanController::class, 'tambahadmin']);
Route::get('/kelolafeedback', [AdminKalurahanController::class, 'kelolafeedback']);
Route::post('/kelolafeedback', [AdminKalurahanController::class, 'simpanFeedback']);
Route::post('/admin/simpanFeedback', [AdminKalurahanController::class, 'simpanFeedback']);
Route::post('/kirimfeedback', [AdminKalurahanController::class, 'simpanFeedback']);
Route::post('/feedback/{id}/mark-as-read', [AdminKalurahanController::class, 'markAsRead']);
Route::delete('/feedback/{id}', [AdminKalurahanController::class, 'hapusFeedback']);
Route::get('/kelolaadmin', [AdminKalurahanController::class, 'kelolaAdmin']);
Route::post('/admin/editadmin/{id}', [AdminKalurahanController::class, 'editAdmin']);
Route::post('/admin/simpanadmin', [AdminKalurahanController::class, 'simpanadmin']);
Route::put('/admin/update-admin/{id}', [AdminKalurahanController::class, 'updateAdmin'])->name('update-admin');
Route::get('/kelolaadmin', [AdminKalurahanController::class, 'kelolaAdmin']); // Halaman kelola admin
Route::get('/admin/editadmin/{id}', [AdminKalurahanController::class, 'editAdmin']); // Aksi edit admin
Route::delete('/admin/hapusadmin/{id}', [AdminKalurahanController::class, 'hapusAdmin']); // Aksi hapus admin



//Rute untuk halaman dashboard admin budaya
Route::get('/adminbudaya', [AdminDesaBudayaController::class, 'showDashboard']);
Route::get('/kelolabudaya', [AdminDesaBudayaController::class, 'kelolaBudaya']);
Route::get('/kelolahomepagebudaya', [AdminDesaBudayaController::class, 'kelolaHomepage']);
Route::post('/update-banner-budaya', [AdminDesaBudayaController::class, 'updateBannerBudaya']);
Route::post('/update-welcome-card', [AdminDesaBudayaController::class, 'updateWelcomeCard']);
Route::get('/kelolaagenda', [AdminDesaBudayaController::class, 'kelolaAgenda']);
Route::post('/kelolaagenda', [AdminDesaBudayaController::class, 'simpanAgenda']); 
Route::get('/agenda/{id}/edit', [AdminDesaBudayaController::class, 'editAgenda']);
Route::delete('/agenda/{id}', [AdminDesaBudayaController::class, 'deleteAgenda']);
Route::put('/admin/update-agenda/{id}', [AdminDesaBudayaController::class, 'updateAgenda']);
Route::get('/tambahbudaya', [AdminDesaBudayaController::class, 'tambahBudaya']);
Route::post('/tambahbudaya', [AdminDesaBudayaController::class, 'simpanBudaya']);
Route::get('/laporanbudaya', [AdminDesaBudayaController::class, 'laporanBudaya']);
Route::get('/budaya/{id}', [AdminDesaBudayaController::class, 'show']);
Route::post('/admin/simpan-budaya', [AdminDesaBudayaController::class, 'simpanBudaya']);
Route::get('/admin/edit-budaya/{id}', [AdminDesaBudayaController::class, 'editBudaya']);
Route::put('/admin/update-budaya/{id}', [AdminDesaBudayaController::class, 'updateBudaya']);
Route::delete('/admin/hapus-budaya/{id}', [AdminDesaBudayaController::class, 'hapusBudaya']);



//Rute untuk halaman dashboard admin preneur
Route::get('/adminpreneur', [AdminDesaPreneurController::class, 'showDashboard']);
Route::get('/tambahpreneur', [AdminDesaPreneurController::class, 'tambahPreneur']);
Route::post('/simpanpreneur', [AdminDesaPreneurController::class, 'simpanPreneur']);
Route::get('/kelolapreneur', [AdminDesaPreneurController::class, 'kelolaPreneur'])->name('kelolapreneur');
Route::get('/admin/editpreneur/{id}', [AdminDesaPreneurController::class, 'editPreneur']);
Route::put('/updatepreneur/{id}', [AdminDesaPreneurController::class, 'updatePreneur'])->name('updatepreneur');
Route::delete('/hapusPreneur/{id}', [AdminDesaPreneurController::class, 'hapusPreneur']);
Route::get('/transaksipreneur', [AdminDesaPreneurController::class, 'transaksiPreneur']);
Route::get('/laporanpreneur', [AdminDesaPreneurController::class, 'laporanPreneur']);
Route::get('/kelolahomepagepreneur', [AdminDesaPreneurController::class, 'kelolaHomepage']);
Route::post('/update-banner-preneur', [AdminDesaPreneurController::class, 'updateBannerPreneur']);


//Rute untuk halaman dashboard admin prima
Route::get('/adminprima', [AdminDesaPrimaController::class, 'showDashboard']);
Route::get('/tambahprima', [AdminDesaPrimaController::class, 'tambahPrima']);
Route::post('/simpanprima', [AdminDesaPrimaController::class, 'simpanPrima']);
Route::get('/admin/editprima/{id}', [AdminDesaPrimaController::class, 'editPrima']);
Route::put('/updatePrima/{id}', [AdminDesaPrimaController::class, 'updatePrima'])->name('updatePrima');
Route::delete('/hapusprima/{id}', [AdminDesaPrimaController::class, 'hapusPrima'])->name('hapusPrima');
Route::get('/transaksiprima', [AdminDesaPrimaController::class, 'transaksiPrima']);
Route::get('/laporanprima', [AdminDesaPrimaController::class, 'laporanPrima']);
Route::get('/kelolaprima', [AdminDesaPrimaController::class, 'kelolaPrima']);
Route::get('/kelolahomepageprima', [AdminDesaPreneurController::class, 'kelolaHomepage']);
Route::post('/update-banner-prima', [AdminDesaPreneurController::class, 'updateBannerPrima']);
Route::get('/search', [AdminDesaPrimaController::class, 'searchPrima'])->name('search.prima');



// Rute untuk halaman dashboard admin wisata
Route::get('/adminwisata', [AdminDesaWisataController::class, 'showDashboard']);
Route::get('/tambahwisata', [AdminDesaWisataController::class, 'tambahWisata']);
Route::post('/tambahwisata', [AdminDesaWisataController::class, 'simpanWisata']);
Route::post('/storewisata', [AdminDesaWisataController::class, 'storeWisata']); 
Route::get('/kelolawisata', [AdminDesaWisataController::class, 'kelolaWisata']);
Route::get('/editwisata/{id}', [AdminDesaWisataController::class, 'editWisata']);
Route::put('/admin/update-wisata/{id}', [AdminDesaWisataController::class, 'updateWisata']);
Route::post('/admin/simpan-wisata', [AdminDesaWisataController::class, 'simpanWisata']);
Route::delete('/deletewisata/{id}', [AdminDesaWisataController::class, 'deleteWisata']); 
Route::get('/transaksiwisata', [AdminDesaWisataController::class, 'transaksiWisata']);
Route::get('/laporanwisata', [AdminDesaWisataController::class, 'laporanWisata']);
Route::get('/kelolahomepagewisata', [AdminDesaWisataController::class, 'kelolaHomepage']);
Route::post('/update-banner-wisata', [AdminDesaWisataController::class, 'updateBannerWisata']);
Route::get('/desawisata', [PageController::class, 'desawisata']);


// Route untuk login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerAdmin'])->name('register.process');



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

