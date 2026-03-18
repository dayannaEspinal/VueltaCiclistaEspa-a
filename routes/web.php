<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CiclistaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ciclista', [CiclistaController::class, 'index'])->name('ciclista.index');
Route::get('/ciclista/create', [CiclistaController::class, 'create'])->name('ciclista.create');
Route::post('/ciclista', [CiclistaController::class, 'store'])->name('ciclista.store');
Route::get('/ciclista/{id}', [CiclistaController::class, 'show'])->name('ciclista.show');
Route::get('/ciclista/{id}/edit', [CiclistaController::class, 'edit'])->name('ciclista.edit');
Route::put('/ciclista/{id}', [CiclistaController::class, 'update'])->name('ciclista.update');
Route::delete('/ciclista/{id}', [CiclistaController::class, 'destroy'])->name('ciclista.destroy');
Route::get('/ciclista/{id}/delete', [CiclistaController::class, 'eliminar'])->name('ciclista.delete');
