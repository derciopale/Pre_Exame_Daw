<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\GuardaController;
use App\Http\Controllers\ReclusoController;
use App\Http\Controllers\CelaController;


Route::get('/', function () {
    return view('welcome');
});



Route::resource('celas', CelaController::class);

Route::resource('guardas', GuardaController::class);

Route::resource('reclusos', ReclusoController::class);


Route::get('/guardas/pesquisa', 'ReclusoController@pesquisa');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
