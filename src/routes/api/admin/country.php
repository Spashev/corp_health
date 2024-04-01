<?php

use App\Http\Controllers\Api\Location\CountryController;
use App\Http\Controllers\Api\Location\LanguageController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->prefix('countries')->as('countries:')->group(static function () {
    Route::get('/', [CountryController::class, 'index'])->name('index');
    Route::get('/{id}', [CountryController::class, 'show'])->name('detail');
    Route::post('/', [CountryController::class, 'store'])->name('create');
    Route::put('/{id}', [CountryController::class, 'update'])->name('update');
    Route::delete('/{country}', [CountryController::class, 'destroy'])->name('delete');
});

Route::get('languages/', [LanguageController::class, 'index'])->name('languages:index')->middleware('auth:sanctum');
