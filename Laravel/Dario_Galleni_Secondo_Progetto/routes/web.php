<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'home'])->name('homePage');

Route::get('/chisiamo', [PublicController::class, 'chisiamo'])->name('chisiamo');

Route::get('/dettagli/{id}', [PublicController::class, 'dettagli'])->name('details');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('services');




