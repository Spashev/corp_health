<?php

use App\Http\Controllers\Api\Users\AdministratorController;
use App\Http\Controllers\Api\Users\ConsultantController;
use App\Http\Controllers\Api\Users\CoordinatorController;
use App\Http\Controllers\Api\Users\UserLogController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->prefix('coordinators')->as('coordinators:')->group(function () {
    Route::get('/', [CoordinatorController::class, 'index'])->name('index');
    Route::get('/{id}', [CoordinatorController::class, 'show'])->name('detail');
    Route::post('/', [CoordinatorController::class, 'store'])->name('create');
    Route::put('/{id}', [CoordinatorController::class, 'update'])->name('update');
    Route::delete('/{note}', [CoordinatorController::class, 'destroy'])->name('delete');
});

Route::middleware('auth:sanctum')->prefix('consultants')->as('consultants:')->group(function () {
    Route::get('/', [ConsultantController::class, 'index'])->name('index');
    Route::get('/{id}', [ConsultantController::class, 'show'])->name('detail');
    Route::post('/', [ConsultantController::class, 'store'])->name('create');
    Route::put('/{id}', [ConsultantController::class, 'update'])->name('update');
    Route::delete('/{note}', [ConsultantController::class, 'destroy'])->name('delete');
});

Route::middleware('auth:sanctum')->prefix('administrators')->as('administrators:')->group(function () {
    Route::get('/', [AdministratorController::class, 'index'])->name('index');
    Route::get('/{id}', [AdministratorController::class, 'show'])->name('detail');
    Route::post('/', [AdministratorController::class, 'store'])->name('create');
    Route::put('/{id}', [AdministratorController::class, 'update'])->name('update');
    Route::delete('/{note}', [AdministratorController::class, 'destroy'])->name('delete');
});

Route::get('/users/logs', [UserLogController::class, 'index'])->name('index')->middleware('auth:sanctum');
