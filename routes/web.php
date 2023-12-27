<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CiriFisikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HasilDiagnosaController;
use App\Http\Controllers\HasilPerhitunganController;
use App\Http\Controllers\JenisKelaminController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\SolusiStuntingController;
use App\Http\Controllers\TinggiBadanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingpageController::class, 'utama']);


Route::get('/auth/login', [AuthController::class, 'loginPage']);
Route::post('/auth/login', [AuthController::class, 'loginPost'])->name('auth.login');
Route::get('/auth/register', [AuthController::class, 'registerPage']);
Route::post('/auth/register', [AuthController::class, 'registerPost'])->name('auth.register');

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard']);
});

Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

// master data
Route::resource('ciri-fisik', CiriFisikController::class);
Route::resource('hasil-diagnosa', HasilDiagnosaController::class);
Route::resource('jenis-kelamin', JenisKelaminController::class);
Route::resource('solusi-stunting', SolusiStuntingController::class);
Route::resource('tinggi-badan', TinggiBadanController::class);

// Diagnosa
Route::resource('hasil-perhitungan', HasilPerhitunganController::class);
Route::get('/user/hasil-perhitungan/get-data', [HasilPerhitunganController::class, 'getData']);

// manajemen user
Route::resource('manajemen-pengguna', UserController::class);
