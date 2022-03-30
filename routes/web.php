<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\AuthController;
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

Route::get('antrian/form-antrian', [AntrianController::class, 'index'])->name('antrian');
Route::post('antrian/form-antrian', [AntrianController::class, 'submit'])->name('antrian.post');
Route::get('/antrian', [AntrianController::class, 'list'])->name('antrian.list');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'submit'])->name('login.post');
