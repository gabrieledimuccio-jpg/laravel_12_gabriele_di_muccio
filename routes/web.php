<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'home'])->name('home');

Route::get('/index',[ArticleController::class, 'index'])->name('index');
Route::get('/create',[ArticleController::class, 'create'])->name('create');
Route::post('/store',[ArticleController::class, 'store'])->name('store');
Route::get('/show/{article}',[ArticleController::class, 'show'])->name('show');

Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('edit');
Route::put('/update/{article}', [ArticleController::class, 'update'])->name('update');
Route::delete('/{article}', [ArticleController::class, 'destroy'])->name('destroy');
