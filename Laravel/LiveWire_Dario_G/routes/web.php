<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/create', [AlbumController::class, 'create'])->name('create');
Route::get('/index', [AlbumController::class, 'index'])->name('index');
Route::get('/show/{album}', [AlbumController::class, 'show'])->name('show');
Route::get('/edit/{album}', [AlbumController::class, 'edit'])->name('edit');
Route::delete('/delete/{album}', [AlbumController::class, 'destroy'])->name('delete');
