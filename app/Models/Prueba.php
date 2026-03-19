<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $table = 'pruebas';

    protected $fillable = [
        'nombre',
        'ciclista_ganador',
        'clasificacion_final',
        'numero_etapas',
        'anio_edicion',
        'km_totales',
    ];
}