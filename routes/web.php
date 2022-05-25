<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarMenuController;
use App\Http\Controllers\DaftarBarangSnackController;
use App\Http\Controllers\PemesananMakananMinumanController;
use App\Http\Controllers\DaftarPulsaController;
use App\Http\Controllers\PemesananBarangSnackController;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/beranda', [BerandaController::class, 'index']);
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

    Route::get('/pemesananmakananminuman', [PemesananMakananMinumanController::class, 'index']);
    Route::post('pemesananmakananminuman/{id}', [PemesananMakananMinumanController::class, 'update'])->name('pemesananmakananminuman.update');
    Route::get('pemesanandetail/{id}', [PemesananMakananMinumanController::class, 'detail']);
    Route::get('pemesananmakananminuman/delete/{id}', [PemesananMakananMinumanController::class, 'delete'])->name('pemesananmakananminuman.delete');

    Route::get('/pemesananbarangsnack', [PemesananBarangSnackController::class, 'index']);
    Route::post('pemesananbarangsnack/{id}', [PemesananBarangSnackController::class, 'update'])->name('pemesananbarangsnack.update');
    Route::get('pemesanandetailbarang/{id}', [PemesananBarangSnackController::class, 'detail']);
    Route::get('pemesananbarangsnack/delete/{id}', [PemesananBarangSnackController::class, 'delete'])->name('pemesananbarangsnack.delete');

    Route::get('/daftarpulsa', [DaftarPulsaController::class, 'index'])->name('daftarpulsa.index');
    Route::post('daftarpulsa/store', [DaftarPulsaController::class, 'store'])->name('daftarpulsa.store');
    Route::post('daftarpulsa/update/{id}', [DaftarPulsaController::class, 'update'])->name('daftarpulsa.update');
    Route::get('daftarpulsa/delete/{id}', [DaftarPulsaController::class, 'delete']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();
