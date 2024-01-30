<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;


Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/store', [PublicController::class, 'store'])->name('store');
Route::get('/dettaglio_tavola{id}', [PublicController::class, 'dettagli'])->name('dettagli');
Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');
Route::post('/messaggio_inviato', [PublicController::class, 'messaggioinviato'])->name('messaggioinviato');

//rotte articoli

Route::get('/inserisci_annuncio', [PublicController::class, 'inserisci'])->name('inserisci');
Route::post('/annuncioinserito', [PublicController::class, 'annuncioinserito'])->name('annuncioinserito');


Route::get('/category/create', [CategoryController::class, 'create'])->name('category_create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category_store');
Route::get('/category/index', [CategoryController::class, 'index'])->name('category_index');
Route::get('/category/show/{category}', [CategoryController::class, 'show'])->name('category_show');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category_edit');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category_update');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category_update');
Route::delete('/category/delete/{category}', [CategoryController::class, 'update'])->name('category_delete');






























