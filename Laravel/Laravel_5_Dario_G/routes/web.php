<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/store', [PublicController::class, 'store'])->name('store');
Route::get('/dettaglio_tavola{id}', [PublicController::class, 'dettagli'])->name('dettagli');
Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');
Route::post('/messaggio_inviato', [PublicController::class, 'messaggioinviato'])->name('messaggioinviato');

//rotte articoli

Route::get('/inserisci_annuncio', [PublicController::class, 'inserisci'])->name('inserisci');
Route::post('/annuncioinserito', [PublicController::class, 'annuncioinserito'])->name('annuncioinserito');



















