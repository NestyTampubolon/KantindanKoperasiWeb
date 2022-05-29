<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Android\MakananMinumanController;
use App\Http\Controllers\Android\BarangSnackController;
use App\Http\Controllers\Android\PulsaController;
use App\Http\Controllers\Android\PemesananController;
use App\Http\Controllers\Android\PemesananBarangController;
use App\Http\Controllers\Android\BookingRuanganController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/', [BerandaController::class, 'index']);
Route::get('/makanan', [MakananMinumanController::class, 'index']);

Route::get('/pulsa', [PulsaController::class, 'index']);
Route::post('store', [PulsaController::class, 'store']);
Route::put('/makanan/updatestok/{id}', [MakananMinumanController::class, 'updatestok']);
Route::get('/barang', [BarangSnackController::class, 'index']);

Route::post('checkoutmakanan', [PemesananController::class, 'store']);
Route::get('checkoutmakanan/user/{id}',  [PemesananController::class, 'history']);

Route::post('checkoutbarang', [PemesananBarangController::class, 'store']);
Route::get('checkoutbarang/user/{id}',  [PemesananBarangController::class, 'history']);


Route::post('bookingruangan', [BookingRuanganController::class, 'store']); 
Route::get('bookingruangan/user/{id}', [BookingRuanganController::class, 'history']);


Route::post('checkoutpulsa', [PulsaController::class, 'store']); 
Route::get('checkoutpulsa/user/{id}', [PulsaController::class, 'history']);
