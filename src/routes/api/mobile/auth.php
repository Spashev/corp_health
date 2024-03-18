<?php

use App\Http\Controllers\Api\Auth\Mobile\LoginController;
use App\Http\Controllers\Api\Auth\Mobile\LogoutController;
use Illuminate\Support\Facades\Route;

Route::post('/login', LoginController::class)->name('login');
Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth:sanctum');
