<?php

use App\Http\Controllers\Api\Services\MainServiceController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->prefix('services/main')->as('services:main:')->group(function () {
    Route::get('/', [MainServiceController::class, 'index'])->name('index');
    Route::get('/{id}', [MainServiceController::class, 'show'])->name('detail');
    Route::post('/', [MainServiceController::class, 'store'])->name('create');
    Route::put('/{id}', [MainServiceController::class, 'update'])->name('update');
    Route::delete('/{service}', [MainServiceController::class, 'destroy'])->name('delete');
});

Route::middleware('auth:sanctum')->prefix('services/additional')->as('services:additional:')->group(function () {
    Route::get('/', [MainServiceController::class, 'index'])->name('index');
    Route::get('/{id}', [MainServiceController::class, 'show'])->name('detail');
    Route::post('/', [MainServiceController::class, 'store'])->name('create');
    Route::put('/{id}', [MainServiceController::class, 'update'])->name('update');
    Route::delete('/{service}', [MainServiceController::class, 'destroy'])->name('delete');
});

Route::middleware('auth:sanctum')->prefix('services/program')->as('services:program:')->group(function () {
    Route::get('/', [MainServiceController::class, 'index'])->name('index');
    Route::get('/{id}', [MainServiceController::class, 'show'])->name('detail');
    Route::post('/', [MainServiceController::class, 'store'])->name('create');
    Route::put('/{id}', [MainServiceController::class, 'update'])->name('update');
    Route::delete('/{service}', [MainServiceController::class, 'destroy'])->name('delete');
});