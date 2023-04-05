<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('admin')->middleware(['auth','admin'])->group(function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'viewAdmin'])->name('home');
    
    Route::get('/profile/{id}', [App\Http\Controllers\AdminController::class, 'viewProfile'])->name('profile');
    Route::post('/ubahProfile/{id}', [App\Http\Controllers\AdminController::class, 'ubahProfile']);

    Route::get('/petugas', [App\Http\Controllers\PetugasController::class, 'viewPetugas'])->name('petugas');
    Route::post('/tambahPetugas', [App\Http\Controllers\PetugasController::class, 'tambahPetugas']);
    Route::post('/ubahPetugas/{id}', [App\Http\Controllers\PetugasController::class, 'ubahPetugas']);
    Route::get('/hapusPetugas/{id}', [App\Http\Controllers\PetugasController::class, 'hapusPetugas']);
    
    Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'viewKelas'])->name('kelas');
    Route::post('/tambahKelas', [App\Http\Controllers\KelasController::class, 'tambahKelas']);
    Route::post('/ubahKelas/{id}', [App\Http\Controllers\KelasController::class, 'ubahKelas']);
    Route::get('/hapusKelas/{id}', [App\Http\Controllers\KelasController::class, 'hapusKelas']);

    Route::get('/spp', [App\Http\Controllers\SppController::class, 'viewSpp'])->name('spp');
    Route::post('/tambahSpp', [App\Http\Controllers\SppController::class, 'tambahSpp']);
    Route::post('/ubahSpp/{id}', [App\Http\Controllers\SppController::class, 'ubahSpp']);
    Route::get('/hapusSpp/{id}', [App\Http\Controllers\SppController::class, 'hapusSpp']);
    
    Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'viewSiswa'])->name('siswa');
    Route::post('/tambahSiswa', [App\Http\Controllers\SiswaController::class, 'tambahSiswa']);
    Route::post('/ubahSiswa/{id}', [App\Http\Controllers\SiswaController::class, 'ubahSiswa']);
    Route::get('/hapusSiswa/{id}', [App\Http\Controllers\SiswaController::class, 'hapusSiswa']);

    Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'viewPembayaran'])->name('pembayaran');
    Route::get('/tagihanBulan/{id}', [App\Http\Controllers\TagihanController::class, 'viewTagihan'])->name('pembayaran');
    Route::post('/bayar', [App\Http\Controllers\TagihanController::class, 'bayar']);

    Route::get('/detailPembayaran/{id}', [App\Http\Controllers\PembayaranController::class, 'detailPembayaran']);
    Route::get('/cetak/{id}', [App\Http\Controllers\PembayaranController::class, 'cetakPembayaran']);
    
    Route::get('/laporan', [App\Http\Controllers\PembayaranController::class, 'viewLaporan'])->name('laporan');
    Route::get('/cetakLaporan', [App\Http\Controllers\PembayaranController::class, 'cetakLaporan']);
});
Route::prefix('petugas')->middleware(['auth','petugas'])->group(function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'viewAdmin'])->name('home');
    
    Route::get('/profile/{id}', [App\Http\Controllers\AdminController::class, 'viewProfile'])->name('profile');
    Route::post('/ubahProfile/{id}', [App\Http\Controllers\AdminController::class, 'ubahProfile']);
    
    Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'viewPembayaran'])->name('pembayaran');
    Route::get('/tagihanBulan/{id}', [App\Http\Controllers\TagihanController::class, 'viewTagihan'])->name('pembayaran');
    Route::post('/bayar', [App\Http\Controllers\TagihanController::class, 'bayar']);

    Route::get('/detailPembayaran/{id}', [App\Http\Controllers\PembayaranController::class, 'detailPembayaran']);
    Route::get('/cetak/{id}', [App\Http\Controllers\PembayaranController::class, 'cetakPembayaran']);

    Route::get('/laporan', [App\Http\Controllers\PembayaranController::class, 'viewLaporan'])->name('laporan');
    Route::get('/cetakLaporan', [App\Http\Controllers\PembayaranController::class, 'cetakLaporan']);
});
Route::prefix('siswa')->middleware(['auth','siswa'])->group(function(){
    Route::get('/', [App\Http\Controllers\SiswaUserController::class, 'tampilanSiswa'])->name('viewSiswa');
    Route::get('/detail/{id}', [App\Http\Controllers\SiswaUserController::class, 'viewDetail'])->name('viewSiswa');

    Route::get('/profile/{id}', [App\Http\Controllers\SiswaUserController::class, 'viewProfile'])->name('profile');
    Route::post('/ubahProfile/{id}', [App\Http\Controllers\SiswaUserController::class, 'ubahProfile']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
