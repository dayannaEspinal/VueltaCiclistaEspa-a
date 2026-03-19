<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CiclistaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ParticipaController;
use App\Http\Controllers\PruebaController;

Route::get('/', function () {
    return view('index');
});

Route::resource('ciclista', CiclistaController::class);
Route::resource('equipo', EquipoController::class);
Route::resource('participa', ParticipaController::class);
Route::resource('prueba', PruebaController::class);
