<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\BeliController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KoinController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\VoucherController;

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

Route::get('/dashboard', function () {
    echo ("Ini halaman dashboard");
});

Route::get('/biro-dan-lembaga', function () {
    echo ("Ini halaman Biro dan Lembaga");
});

Route::get('/biro-dan-lembaga/biro-PPK', function () {
    echo ("Ini halaman Biro PPK");
});

Route::get('/biro-dan-lembaga/biro-USD', function () {
    echo ("Ini halaman Biro USD");
});

Route::get('/biro-dan-lembaga/LPTIK', function () {
    echo ("Ini halaman LPTIK");
});

Route::get('/fakultas', function () {
    echo ("Ini halaman Fakultas");
});

Route::get('/fakultas/fakultas-hukum', function () {
    echo ("Ini halaman Fakultas Hukum");
});

Route::get('/fakultas/fakultas-teknik', function () {
    echo ("Ini halaman Fakultas Teknik");
});

Route::get('/fakultas/fakultas-ekonomi-dan-bisnis', function () {
    echo ("Ini halaman Fakultas Ekonomi dan Bisnis");
});

Route::get('/fakultas/fakultas-kedokteran', function () {
    echo ("Ini halaman Fakultas Kedokteran");
});

Route::get('/bayar', [BayarController::class, 'bayar']);
Route::get('/beli', [BeliController::class, 'beli']);
Route::get('/diskon', [DiskonController::class, 'diskon']);
Route::get('/jual', [JualController::class, 'jual']);
Route::get('/katalog', [KatalogController::class, 'katalog']);
Route::get('/keranjang', [KeranjangController::class, 'keranjang']);
Route::get('/koin', [KoinController::class, 'koin']);
Route::get('/penilaian', [PenilaianController::class, 'penilaian']);
Route::get('/promo', [PromoController::class, 'promo']);
Route::get('/voucher', [VoucherController::class, 'voucher']);