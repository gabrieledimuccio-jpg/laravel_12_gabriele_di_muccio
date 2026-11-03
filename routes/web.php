<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'home'])->name('home');

Route::get('/article/index',[ArticleController::class, 'index'])->name('index');
Route::get('/article/create',[ArticleController::class, 'create'])->name('create');
Route::post('/article/store',[ArticleController::class, 'store'])->name('store');
Route::get('/article/show/{article}',[ArticleController::class, 'show'])->name('show');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('edit');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('update');
Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('destroy');
