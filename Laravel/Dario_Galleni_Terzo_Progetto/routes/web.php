<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'home'])->name('homePage');

Route::get('/prodotti', [PublicController::class, 'prodotti'])->name('prodotti');

Route::get('/dettagli/{identificativo}', [PublicController::class, 'dettagli'])->name('details');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('services');