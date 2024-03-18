<?php

use App\Http\Controllers\Api\Articles\ArticleController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->prefix('articles')->as('articles:')->group(static function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('detail');
    Route::post('/', [ArticleController::class, 'store'])->name('create');
    Route::put('/{id}', [ArticleController::class, 'update'])->name('update');
    Route::delete('/{article}', [ArticleController::class, 'destroy'])->name('delete');
});
