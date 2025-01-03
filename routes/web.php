<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminKalurahanController;
use App\Http\Controllers\AdminDesaBudayaController;
use App\Http\Controllers\AdminDesaPreneurController;
use App\Http\Controllers\AdminDesaPrimaController;
use App\Http\Controllers\AdminDesaWisataController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/homess', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // // Route untuk halaman dashboard superadmin 
        Route::get('/adminkalurahan', [AdminKalurahanController::class, 'showDashboard'])->name('admin.adminkalurahan.adminkalurahan');
        Route::get('/kelolahomepage', [AdminKalurahanController::class, 'kelolahomepage']);
        Route::post('/update-homepage-kalurahan', [AdminKalurahanController::class, 'updateHomepageKalurahan']);
        Route::get('/tambahadmin', [AdminKalurahanController::class, 'tambahadmin']);
        Route::get('/kelolafeedback', [AdminKalurahanController::class, 'kelolafeedback']);
        Route::post('/kelolafeedback', [AdminKalurahanController::class, 'simpanFeedback']);
        Route::post('/simpanFeedback', [AdminKalurahanController::class, 'simpanFeedback']);
        Route::post('/kirimfeedback', [AdminKalurahanController::class, 'simpanFeedback']);
        Route::patch('/adminkalurahan/respond/{id}', [AdminKalurahanController::class, 'respond']);
        Route::delete('/hapusFeedback/{id}', [AdminKalurahanController::class, 'hapusFeedback']);
        Route::get('/kelolaadmin', [AdminKalurahanController::class, 'kelolaAdmin']);
        Route::post('/editadmin/{id}', [AdminKalurahanController::class, 'editAdmin']);
        Route::post('/simpanAdmin', [AdminKalurahanController::class, 'simpanadmin']);
        Route::put('/updateAdmin/{id}', [AdminKalurahanController::class, 'updateAdmin'])->name('update-admin');
        Route::get('/kelolaadmin', [AdminKalurahanController::class, 'kelolaAdmin']); // Halaman kelola admin
        Route::get('/editadmin/{id}', [AdminKalurahanController::class, 'editAdmin']); // Aksi edit admin
        Route::delete('/hapusAdmin/{id}', [AdminKalurahanController::class, 'hapusAdmin']); // Aksi hapus admin
        Route::post('/update-homepage-tentangkami', [AdminKalurahanController::class, 'updateHomepageTentangKami']);
        Route::post('/update-homepage-kontak', [AdminKalurahanController::class, 'updateHomepageKontak']);


        //Rute untuk halaman dashboard admin budaya
        Route::get('/adminbudaya', [AdminDesaBudayaController::class, 'showDashboard']);
        Route::get('/kelolabudaya', [AdminDesaBudayaController::class, 'kelolaBudaya']);
        Route::get('/kelolahomepagebudaya', [AdminDesaBudayaController::class, 'kelolaHomepage']);
        Route::post('/updateBannerBudaya', [AdminDesaBudayaController::class, 'updateBannerBudaya']);
        Route::post('/updateWelcomeCard', [AdminDesaBudayaController::class, 'updateWelcomeCard']);
        Route::get('/tambahbudaya', [AdminDesaBudayaController::class, 'tambahBudaya']);
        Route::post('/tambahbudaya', [AdminDesaBudayaController::class, 'simpanBudaya']);
        Route::post('/simpanBudaya', [AdminDesaBudayaController::class, 'simpanBudaya']);
        Route::get('/editBudaya/{id}', [AdminDesaBudayaController::class, 'editBudaya']);
        Route::put('/updateBudaya/{id}', [AdminDesaBudayaController::class, 'updateBudaya']);
        Route::delete('/hapusBudaya/{id}', [AdminDesaBudayaController::class, 'hapusBudaya']);
        Route::get('/kelolaagenda', [AdminDesaBudayaController::class, 'kelolaAgenda']);
        Route::post('/kelolaagenda', [AdminDesaBudayaController::class, 'simpanAgenda']); 
        Route::get('/agenda/{id}/edit', [AdminDesaBudayaController::class, 'editAgenda']);
        Route::delete('/agenda/{id}', [AdminDesaBudayaController::class, 'deleteAgenda']);
        Route::put('/updateAgenda/{id}', [AdminDesaBudayaController::class, 'updateAgenda']);
        Route::delete('/hapusAgenda/{id}', [AdminDesaBudayaController::class, 'hapusAgenda']);

        //Rute untuk halaman dashboard admin preneur
        Route::get('/adminpreneur', [AdminDesaPreneurController::class, 'showDashboard']);
        Route::get('/tambahpreneur', [AdminDesaPreneurController::class, 'tambahPreneur']);
        Route::post('/tambahpreneur', [AdminDesaPreneurController::class, 'simpanPreneur']);
        Route::get('/editpreneur/{id}', [AdminDesaPreneurController::class, 'editPreneur']);
        Route::put('/updatepreneur/{id}', [AdminDesaPreneurController::class, 'updatePreneur']);
        Route::get('/kelolapreneur', [AdminDesaPreneurController::class, 'kelolaPreneur']);
        Route::put('/updatePreneur/{id}', [AdminDesaPreneurController::class, 'updatePreneur']);
        Route::delete('/hapusPreneur/{id}', [AdminDesaPreneurController::class, 'hapusPreneur']);
        Route::get('/transaksipreneur', [AdminDesaPreneurController::class, 'transaksiPreneur']);
        Route::get('/laporanpreneur', [AdminDesaPreneurController::class, 'laporanPreneur']);
        Route::get('/kelolahomepagepreneur', [AdminDesaPreneurController::class, 'kelolaHomepage']);
        Route::post('/updateBannerPreneur', [AdminDesaPreneurController::class, 'updateBannerPreneur']);

        //Rute untuk halaman dashboard admin prima
        Route::get('/adminprima', [AdminDesaPrimaController::class, 'showDashboard']);
        Route::get('/tambahprima', [AdminDesaPrimaController::class, 'tambahPrima']);
        Route::post('/tambahprima', [AdminDesaPrimaController::class, 'simpanPrima']);
        Route::get('/editprima/{id}', [AdminDesaPrimaController::class, 'editPrima']);
        Route::put('/updatePrima/{id}', [AdminDesaPrimaController::class, 'updatePrima']);
        Route::delete('/hapusPrima/{id}', [AdminDesaPrimaController::class, 'hapusPrima']);
        Route::get('/transaksiprima', [AdminDesaPrimaController::class, 'transaksiPrima']);
        Route::get('/laporanprima', [AdminDesaPrimaController::class, 'laporanPrima']);
        Route::get('/kelolaprima', [AdminDesaPrimaController::class, 'kelolaPrima']);
        Route::get('/kelolahomepageprima', [AdminDesaPrimaController::class, 'kelolaHomepage']);
        Route::post('/updateBannerPrima', [AdminDesaPrimaController::class, 'updateBannerPrima']);

        // Rute untuk halaman dashboard admin wisata
        Route::get('/adminwisata', [AdminDesaWisataController::class, 'showDashboard']);
        Route::get('/tambahwisata', [AdminDesaWisataController::class, 'tambahWisata']);
        Route::post('/tambahwisata', [AdminDesaWisataController::class, 'simpanWisata']);
        Route::post('/storewisata', [AdminDesaWisataController::class, 'storeWisata']); 
        Route::get('/kelolawisata', [AdminDesaWisataController::class, 'kelolaWisata']);
        Route::get('/editwisata/{id}', [AdminDesaWisataController::class, 'editWisata']);
        Route::put('/updateWisata/{id}', [AdminDesaWisataController::class, 'updateWisata']);
        Route::post('/simpanWisata', [AdminDesaWisataController::class, 'simpanWisata']);
        Route::delete('/deletewisata/{id}', [AdminDesaWisataController::class, 'deleteWisata']); 
        Route::get('/transaksiwisata', [AdminDesaWisataController::class, 'transaksiWisata']);
        Route::get('/laporanwisata', [AdminDesaWisataController::class, 'laporanWisata']);
        Route::get('/kelolahomepagewisata', [AdminDesaWisataController::class, 'kelolaHomepage']);
        Route::post('/update-banner-wisata', [AdminDesaWisataController::class, 'updateBannerWisata']);
        Route::get('/desawisata', [PageController::class, 'desawisata']);
        });

require __DIR__ . '/auth.php';

    // Routes untuk Website
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/desabudaya', [PageController::class, 'desabudaya'])->name('desabudaya');
    Route::get('/detail_budaya/{id}', [PageController::class, 'detail_budaya']);
    Route::get('/desaprima', [PageController::class, 'desaprima'])->name('desaprima');
    Route::get('/desapreneur', [PageController::class, 'desapreneur'])->name('desapreneur');
    Route::get('/detail_preneur/{id}', [PageController::class, 'detail_preneur']);
    Route::get('/detail_prima/{id}', [PageController::class, 'detail_prima']);
    Route::get('/desawisata', [PageController::class, 'desawisata'])->name('desawisata');
    Route::get('/detail_wisata/{id}', [PageController::class, 'detail_wisata']);
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::post('/simpanFeedback', [PageController::class, 'simpanFeedback'])->name('simpanFeedback');




// // Route untuk login
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'registerAdmin'])->name('register.process');


// // Rute untuk Auth
// Route::get('/login', [AuthController::class, 'login'])->name('admin.adminkelurahan.samples.login');
// Route::get('/register', [AuthController::class, 'register'])->name('admin.adminkelurahan.samples.register');

