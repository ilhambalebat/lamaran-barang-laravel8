<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\PemintaController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\PersonilController;
use App\Http\Controllers\RencanaController;
use App\Http\Controllers\SeleksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* HOME */
Route::get('/', [HomeController::class, 'login'])->middleware("isLogin")->name("login");
Route::post('/login', [HomeController::class, 'authenticate'])->name("login.proses");
Route::get('/logout', [HomeController::class, 'logout'])->name("logout");
Route::get('/forbidden', [HomeController::class, 'forbidden'])->name("forbidden");


// Yang Sudah Login Admin
Route::group(["middleware" => ["isAdminOrUser"]], function(){
    Route::get('/permintaan',[PermintaanController::class, 'index'])->name("permintaan");
    Route::post('/permintaan/detail',[PermintaanController::class, 'detail'])->name("permintaan.detail");
    Route::post('/permintaan/tambah',[PermintaanController::class, 'tambah'])->name("permintaan.tambah");
    Route::get('/permintaan/dibatalkan',[PermintaanController::class, 'dibatalkan'])->name("permintaan.tambah");
    Route::post('/barang/detail',[BarangController::class, 'detail'])->name("barang.detail");
    Route::post('/peminta/cari',[PemintaController::class, 'cari'])->name("peminta.cari");
    Route::post('/peminta/detail',[PemintaController::class, 'detail'])->name("peminta.detail");
});

// Yang Sudah Login Admin
Route::group(["middleware" => ["isAdmin"]], function(){    
    /* Dashboard Admin */
    Route::get('/barang',[BarangController::class, 'index'])->name("barang");
    Route::post('/barang/update',[BarangController::class, 'perbarui'])->name("barang.update");
    Route::get('/lokasi',[LokasiController::class, 'index'])->name("lokasi");    
    Route::get('/departemen',[DepartemenController::class, 'index'])->name("departemen");
    Route::get('/peminta',[PemintaController::class, 'index'])->name("peminta");
    Route::get('/permintaan/diterima',[PermintaanController::class, 'diterima'])->name("permintaan.diterima");
    Route::get('/permintaan/ditolak',[PermintaanController::class, 'ditolak'])->name("permintaan.ditolak");
});


