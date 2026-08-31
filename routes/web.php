<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home']);
Route::get('/create/article', [ArticleController::class, 'create'])->middleware('auth')->name('article.create');