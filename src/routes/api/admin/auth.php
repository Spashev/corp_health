<?php

use App\Http\Controllers\Api\Auth\Admin\LoginController;
use App\Http\Controllers\Api\Auth\Admin\LogoutController;
use App\Http\Controllers\Api\Auth\Admin\RegisterController;
use App\Http\Controllers\Api\Users\PasswordGeneratorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')->as('auth:')->group(static function () {
    Route::post('/register', RegisterController::class)->name('register');
    Route::post('/login', LoginController::class)->name('login');
    Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth:sanctum');
    Route::get('/generate-password', PasswordGeneratorController::class)->name('generate-password');
});

Route::middleware('auth:sanctum')->get('/user/me', static function (Request $request) {
    return $request->user();
});