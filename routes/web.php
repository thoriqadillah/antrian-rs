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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form-antrian', [AntrianController::class, 'index'])->name('antrian');
Route::post('/form-antrian/post', [AntrianController::class, 'submit'])->name('antrian.post');
Route::get('/login', [AuthController::class, 'index'])->name('Login Admin');
Route::get('/home/list', [AntrianController::class, 'list'])->name('List Antrian');
