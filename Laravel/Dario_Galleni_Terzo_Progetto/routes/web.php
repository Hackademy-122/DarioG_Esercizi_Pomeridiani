<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'home'])->name('homePage');

Route::get('/prodotti', [PublicController::class, 'prodotti'])->name('prodotti');

Route::get('/dettagli/{variabile}', [PublicController::class, 'dettagli'])->name('dettagli');

Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');

Route::post('/contattaci/submit', [PublicController::class, 'contattaciSubmit'])->name('contattaciSubmit');

Route::get('/success', [PublicController::class, 'success'])->name('success');


