<?php

use App\Http\Controllers\Api\Companies\CompanyController;
use App\Http\Controllers\Api\Companies\CustomerController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->prefix('company/customers')->as('company:customer:')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('index');
    Route::get('/{id}', [CustomerController::class, 'show'])->name('detail');
    Route::post('/', [CustomerController::class, 'store'])->name('create');
    Route::put('/{id}', [CustomerController::class, 'update'])->name('update');
    Route::delete('/{note}', [CustomerController::class, 'destroy'])->name('delete');
});

Route::middleware('auth:sanctum')->prefix('companies')->as('companies:')->group(function () {
    Route::get('/', [CompanyController::class, 'index'])->name('index');
    Route::get('/{id}', [CompanyController::class, 'show'])->name('detail');
    Route::post('/', [CompanyController::class, 'store'])->name('create');
    Route::put('/{id}', [CompanyController::class, 'update'])->name('update');
    Route::delete('/{note}', [CompanyController::class, 'destroy'])->name('delete');
});