<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AkunController;
use App\Http\Controllers\Back\SuratController;
use App\Http\Controllers\Back\ProfilController;
use App\Http\Controllers\Back\LaporanController;
use App\Http\Controllers\Front\BerandaController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Front\PengajuanController;
use App\Http\Controllers\Front\HubungiKamiController;
use App\Http\Controllers\Front\ProfilController as FrontProfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// User
Route::get('/', [BerandaController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);

Route::get('profil/{status}', [FrontProfilController::class, 'index']);

Route::get('hubungi-kami', HubungiKamiController::class);
Route::get('pengajuan/{tipe}', [PengajuanController::class, 'index']);

Route::middleware(['auth', 'role:user'])->group(function () {
    // submit pengajuan from user
    Route::post('pengajuan', [PengajuanController::class, 'store']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/surats/detail/{id}', [App\Http\Controllers\HomeController::class, 'show']);

});

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/admin-profil', [ProfilController::class, 'index']);
    Route::put('/admin-profil/{id}', [ProfilController::class, 'update']);

    Route::get('surat/{tipe}', [SuratController::class, 'index']);
    Route::put('surat/{id}', [SuratController::class, 'update']);
    Route::get('surat/detail/{id}', [SuratController::class, 'show']);
    Route::delete('surat/{id}', [SuratController::class, 'destroy']);

    Route::resource('akun', AkunController::class)->only([
        'index', 'store', 'update', 'destroy'
    ]);

    Route::post('laporan/{tipe}', [LaporanController::class, 'laporan']);
});


Auth::routes();

