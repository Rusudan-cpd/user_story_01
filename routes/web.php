<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/create/article', [ArticleController::class, 'create'])->middleware('auth')->name('article.create');
Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/search', [ArticleController::class, 'search'])->name('article.search');
Route::get('/category/{category}', [ArticleController::class, 'category'])->name('article.category');
Route::get('/revisor', [RevisorController::class, 'index'])->middleware('is_revisor')->name('revisor.index');
Route::patch('/revisor/{article}/accept', [RevisorController::class, 'accept'])->name('revisor.accept');
Route::patch('/revisor/{article}/reject', [RevisorController::class, 'reject'])->name('revisor.reject');
Route::patch('/revisor/undo', [RevisorController::class, 'undo'])->middleware('is_revisor')->name('revisor.undo');
Route::get('/become/revisor', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
