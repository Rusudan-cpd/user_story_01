<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home']);
Route::get('/create/article', [ArticleController::class, 'create'])->middleware('auth')->name('article.create');
Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/category/{category}', [ArticleController::class, 'category'])->name('article.category');