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
});

/* Rutas para la ciclista*/
Route::get('/ciclista', function () {
    return view('ciclista');
});

route::get('/ciclista/edit',function(){
    return 'Estoy en la vista editar ciclista';
});

route::get('/ciclista/crear',function(){
    return 'Estoy en la vista crear ciclista';
});

route::get('/ciclista/delet',function(){
    return 'Estoy en la vista delete ciclista';
});


