<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SewasayaController;
use App\Http\Controllers\ElektronikController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MoreelektronikController;
use App\Http\Controllers\MorebangunanController;
use App\Http\Controllers\KonfirmasiElektronikController;
use App\Http\Controllers\PenawaranElektronikController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahLelangController;
use App\Http\Controllers\TambahsewaController;
use App\Http\Controllers\DashboardPesertaController;
use App\Http\Controllers\DashboardSewaController;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sewasaya', [App\Http\Controllers\SewasayaController::class, 'index'])->name('sewasaya');
Route::get('/elektronik', [App\Http\Controllers\ElektronikController::class, 'index'])->name('elektronik');
Route::get('/bangunan', [App\Http\Controllers\BangunanController::class, 'index'])->name('bangunan');
Route::get('/kendaraan', [App\Http\Controllers\KendaraanController::class, 'index'])->name('kendaraan');

// button more
Route::get('/moreelektronik', [App\Http\Controllers\MoreelektronikController::class, 'index'])->name('moreelektronik');
Route::get('/morebangunan', [App\Http\Controllers\MorebangunanController::class, 'index'])->name('morebangunan');
Route::get('/morekendaraan', [App\Http\Controllers\MorekendaraanController::class, 'index'])->name('morekendaraan');
Route::get('/CCV', [App\Http\Controllers\CCVController::class, 'index'])->name('CCV');
Route::get('/elf', [App\Http\Controllers\ElfController::class, 'index'])->name('elf');
Route::get('/pasar', [App\Http\Controllers\PasarController::class, 'index'])->name('pasar');

// button ikuti lelang
Route::get('/konfirmel', [App\Http\Controllers\KonfirmasiElektronikController::class, 'index'])->name('konfirmel');

// penawaran lelang
Route::get('/penawaranel', [App\Http\Controllers\PenawaranElektronikController::class, 'index'])->name('penawaranel');

// panduan
Route::get('/panduan', [App\Http\Controllers\PanduanController::class, 'index'])->name('panduan');

// Bangunan
Route::get('/Lelang', [App\Http\Controllers\LelangController::class, 'index'])->name('Lelang');
Route::get('/Sewa', [App\Http\Controllers\SewaController::class, 'index'])->name('Sewa');

// Info jadwal terdekat
Route::get('/jadwal-lelang', [JadwalLelangController::class, 'index'])->name('jadwal-lelang.index');

// admin
Route::prefix('admin/lelang')->group(function () {
    Route::get('/', [LelangAdminController::class, 'index'])->name('admin.lelang.index');
    Route::get('/create', [LelangAdminController::class, 'create'])->name('admin.lelang.create');
    Route::post('/', [LelangAdminController::class, 'store'])->name('admin.lelang.store');
    Route::get('/{id}/edit', [LelangAdminController::class, 'edit'])->name('admin.lelang.edit');
    Route::put('/{id}', [LelangAdminController::class, 'update'])->name('admin.lelang.update');
    Route::delete('/{id}', [LelangAdminController::class, 'destroy'])->name('admin.lelang.destroy');
});

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tambah-lelang', [TambahLelangController::class, 'index'])->name('tambah-lelang');
Route::get('/tambah-sewa', [TambahsewaController::class, 'index'])->name('tambah-sewa');
Route::resource('/dashboard/tambah-lelang', TambahLelangController::class);
Route::resource('/dashboard/peserta', DashboardPesertaController::class);
Route::resource('/dashboard/tambah-sewa', DashboardSewaController::class);
Route::get('/tambah-sewa', [DashboardSewaController::class, 'index'])->name('tambah-sewa');
Route::post('/tambah-sewa', [DashboardSewaController::class,'store'])->name('sewa.store');