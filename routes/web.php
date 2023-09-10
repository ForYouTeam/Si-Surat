<?php

use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\Backoffice\LetterController;
use App\Http\Controllers\Backoffice\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/letters', [LetterController::class, 'index'])->name('bo-surat');
Route::get('/users', [UserController::class, 'index'])->name('bo-akun');

Route::get('/surat-kelahiran', [LetterController::class, 'suratKelahiran'])->name('surat-kelahiran');
