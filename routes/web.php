<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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
Route::prefix('antrian')->group(function() {
    Route::get('/', [AntrianController::class, 'index'])->name('antrian');
    Route::get('/nomor', [AntrianController::class, 'nomor_antrian'])->name('antrian.nomor');
    Route::get('/form', [AntrianController::class, 'pendaftaran'])->name('antrian.pendaftaran');
    Route::post('/form', [AntrianController::class, 'submit'])->name('antrian.pendaftaran.post');
});

Route::get('/', [PoliController::class, 'index'])->name('poli');

Auth::routes();

Route::middleware(['is_admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/next/{poli}', [AdminController::class, 'next'])->name('next_pasien');
});
