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
Route::match(['get', 'post'], '/detail_budaya', [PageController::class, 'detail_budaya']);
Route::get('/detail_preneur/{id}', [PageController::class, 'detail_preneur']);
Route::get('/detail_prima/{id}', [PageController::class, 'detail_prima']);
Route::get('/detail_budaya/{id}', [PageController::class, 'detail_budaya']);
Route::get('/detail_wisata/{id}', [PageController::class, 'detail_wisata']);
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/transaksi', [PageController::class, 'transaksi'])->name('transaksi');


// Rute untuk halaman dashboard superadmin kelurahan
Route::get('/adminkelurahan', [AdminKelurahanController::class, 'showDashboard'])->name('admin.adminkelurahan.adminkelurahan');
Route::get('/kelolaAdmin', [AdminKelurahanController::class, 'kelolaAdmin'])->name('admin.adminkelurahan.kelolaAdmin.kelolaAdmin');
Route::get('/kelolahomepage', [AdminKelurahanController::class, 'kelolahomepage'])->name('admin.adminkelurahan.kelolahomepage.kelolahomepage');
Route::post('/admin/simpan_admin', [AdminKelurahanController::class, 'simpanAdmin'])->name('admin.adminkelurahan.simpanAdmin');
Route::get('/kelolafeedback', [AdminKelurahanController::class, 'kelolafeedback'])->name('admin.adminkelurahan.kelolafeedback.kelolafeedback');

//Rute untuk halaman dashboard admin budaya
Route::get('/adminbudaya', [AdminDesaBudayaController::class, 'showDashboard']);
Route::get('/kelolabudaya', [AdminDesaBudayaController::class, 'kelolaBudaya']);
Route::get('/kelolahomepagebudaya', [AdminDesaBudayaController::class, 'kelolaHomepage']);
Route::get('/homepagebudaya/edit', [AdminDesaBudayaController::class, 'editHomepageBudaya']);
Route::post('/update-homepagebudaya', [AdminDesaBudayaController::class, 'updateHomepageBudaya']);
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
Route::get('/kelolapreneur', [AdminDesaPreneurController::class, 'kelolaPreneur']);
Route::get('/editpreneur/{id}', [AdminDesaPreneurController::class, 'editPreneur']);
Route::post('/updatepreneur/{id}', [AdminDesaPreneurController::class, 'updatePreneur']);
Route::delete('/hapuspreneur/{id}', [AdminDesaPreneurController::class, 'hapusPreneur']);
Route::get('/transaksipreneur', [AdminDesaPreneurController::class, 'transaksiPreneur']);
Route::get('/laporanpreneur', [AdminDesaPreneurController::class, 'laporanPreneur']);
Route::get('/kelolahomepagepreneur', [AdminDesaPreneurController::class, 'kelolaHomepage']);


//Rute untuk halaman dashboard admin prima
Route::get('/adminprima', [AdminDesaPrimaController::class, 'showDashboard']);
Route::get('/tambahprima', [AdminDesaPrimaController::class, 'tambahPrima']);
Route::post('/simpanprima', [AdminDesaPrimaController::class, 'simpanPrima']);
Route::get('editprima/{id}', [AdminDesaPrimaController::class, 'editPrima']);
Route::get('/admin/edit-prima/{id}', [AdminDesaPrimaController::class, 'editPrima']);
Route::put('/admin/update-prima/{id}', [AdminDesaPrimaController::class, 'updatePrima']);
Route::get('/transaksiprima', [AdminDesaPrimaController::class, 'transaksiPrima']);
Route::get('/laporanprima', [AdminDesaPrimaController::class, 'laporanPrima']);
Route::get('/kelolaprima', [AdminDesaPrimaController::class, 'kelolaPrima']);
Route::get('/kelolahomepageprima', [AdminDesaPrimaController::class, 'kelolaHomepage']);



// Rute untuk halaman dashboard admin wisata
Route::get('/adminwisata', [AdminDesaWisataController::class, 'showDashboard']);
Route::get('/tambahwisata', [AdminDesaWisataController::class, 'tambahWisata']);
Route::post('/tambahwisata', [AdminDesaWisataController::class, 'simpanWisata']);
Route::post('/storewisata', [AdminDesaWisataController::class, 'storeWisata']); 
Route::get('/kelolawisata', [AdminDesaWisataController::class, 'kelolaWisata']);
Route::get('/editwisata/{id}', [AdminDesaWisataController::class, 'editWisata']);
Route::post('/updatewisata/{id}', [AdminDesaWisataController::class, 'updateWisata']); 
Route::delete('/deletewisata/{id}', [AdminDesaWisataController::class, 'deleteWisata']); 
Route::get('/transaksiwisata', [AdminDesaWisataController::class, 'transaksiWisata']);
Route::get('/laporanwisata', [AdminDesaWisataController::class, 'laporanWisata']);
Route::get('/kelolahomepagewisata', [AdminDesaWisataController::class, 'kelolaHomepage']);
Route::get('/desawisata', [PageController::class, 'desawisata']);

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

