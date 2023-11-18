<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingpageController;
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
