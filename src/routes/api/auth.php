<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\User\PasswordGeneratorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::prefix('auth')->as('auth:')->group(static function () {
    Route::post('/register', RegisterController::class)->name('register');
    Route::post('/login', LoginController::class)->name('login');
    Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth:sanctum');
    Route::get('/generate-password', PasswordGeneratorController::class)->name('generate-password');
});

Route::middleware('auth:sanctum')->get('/user/me', static function (Request $request) {
    return $request->user();
});