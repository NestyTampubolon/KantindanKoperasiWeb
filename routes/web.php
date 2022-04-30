<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarMenuController;
use App\Http\Controllers\DaftarBarangSnackController;
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

Route::get('/beranda', [BerandaController::class, 'index']);

Route::get('/daftarmenu', [DaftarMenuController::class, 'index']);
Route::get('/tambahmenu', [DaftarMenuController::class, 'tambah']);
Route::post('daftarmenu/store', [DaftarMenuController::class, 'store'])->name('daftarmenu.store');
Route::get('/daftarmenu/edit/{id}', [DaftarMenuController::class, 'edit']);
Route::post('daftarmenu/update/{id}', [DaftarMenuController::class, 'update'])->name('daftarmenu.update');
Route::get('daftarmenu/delete/{id}', [DaftarMenuController::class, 'delete']);


Route::get('/daftarbarangsnack', [DaftarBarangSnackController::class, 'index']);
Route::get('/tambahbarangsnack', [DaftarBarangSnackController::class, 'tambah']);
Route::post('daftarbarangsnack/store', [DaftarBarangSnackController::class, 'store'])->name('daftarbarangsnack.store');
Route::get('/daftarbarangsnack/edit/{id}', [DaftarBarangSnackController::class, 'edit']);
Route::post('daftarbarangsnack/update/{id}', [DaftarBarangSnackController::class, 'update'])->name('daftarbarangsnack.update');
Route::get('daftarbarangsnack/delete/{id}', [DaftarBarangSnackController::class, 'delete']);