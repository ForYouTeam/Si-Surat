<?php

use App\Http\Controllers\Backoffice\LetterController;
use App\Http\Controllers\Backoffice\PjController;
use App\Http\Controllers\Backoffice\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/users')->controller(UserController::class)->group(function() {
    Route::get('/', 'getAllData');
    Route::get('/{id}', 'getDataById');
    Route::delete('/{id}', 'deleteData');
    Route::post('/', 'upsertData');
});
Route::prefix('v1/pj')->controller(PjController::class)->group(function() {
    Route::get('/', 'getAllData');
    Route::get('/{id}', 'getDataById');
    Route::delete('/{id}', 'deleteData');
    Route::post('/', 'upsertData');
});

Route::prefix('v1/letter')->controller(PjController::class)->group(function() {
    Route::get('/', 'getAllData');
});

Route::prefix('v1/letter')->controller(LetterController::class)->group(function() {
    Route::post('/', 'createPayload');
});
