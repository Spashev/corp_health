<?php

use App\Http\Controllers\Api\Tests\TestCategoryController;
use App\Http\Controllers\Api\Tests\TestController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->prefix('tests')->as('test:')->group(function () {
    Route::get('/', [TestController::class, 'index'])->name('index');
    Route::get('/{id}', [TestController::class, 'show'])->name('detail');
    Route::post('/', [TestController::class, 'store'])->name('create');
    Route::put('/{id}', [TestController::class, 'update'])->name('update');
    Route::delete('/{note}', [TestController::class, 'destroy'])->name('delete');
});

Route::middleware('auth:sanctum')->prefix('test/category')->as('test_category:')->group(function () {
    Route::get('/', [TestCategoryController::class, 'index'])->name('index');
    Route::get('/{id}', [TestCategoryController::class, 'show'])->name('detail');
    Route::post('/', [TestCategoryController::class, 'store'])->name('create');
    Route::put('/{id}', [TestCategoryController::class, 'update'])->name('update');
    Route::delete('/{note}', [TestCategoryController::class, 'destroy'])->name('delete');
});