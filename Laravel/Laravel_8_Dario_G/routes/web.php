<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;


//home
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/all_users', [PublicController::class, 'utenti'])->name('utenti');


//category
Route::get('/category', [PublicController::class, 'category'])->name('category');
Route::post('/category_create', [PublicController::class, 'category_store'])->name('category_store');



//articoli
Route::get('/create', [ArticleController::class, 'create'])->name('create');
Route::post('/store', [ArticleController::class, 'store'])->name('store');
Route::get('/index', [ArticleController::class, 'index'])->name('index');
Route::get('/show/{article}', [ArticleController::class, 'show'])->name('show');
Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('edit');
Route::put('/update/{article}', [ArticleController::class, 'update'])->name('update');
Route::delete('/delete/{article}', [ArticleController::class, 'destroy'])->name('delete');




