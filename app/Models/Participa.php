<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participa extends Model
{
    use HasFactory;

    protected $table = 'participas';
    protected $primaryKey = 'id_participa';

    protected $fillable = [
        'id_equipo',
        'id_prueba',
        'fecha_inicio',
        'fin_contrato',
    ];
}
