<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/article/create', [PublicController::class, 'create'])->name('create');
Route::get('/article/index', [PublicController::class, 'index'])->name('index');
Route::get('/article/edit/{article}', [PublicController::class, 'edit'])->name('edit');








