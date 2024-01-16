<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name(`homePage`);


Route::get('/paginauno', function(){

    $name = "Dario";


    return view('paginauno', ['name'=> $name]);
});

Route::get('/paginadue', function(){

    $annunci = [["title"=>"Motore",'description'=>'Vespa','price'=>'2000 euro'],
                ["title"=>'Auto','description'=>'Panda','price'=>'5000 euro'],
                ["title"=>'IPhone','description'=>'Undici','price'=>'10'],
                ["title"=>'Playstation','description'=>'5','price'=>'200']
                ];

    return view('paginadue', ['ann'=>$annunci]);
});
