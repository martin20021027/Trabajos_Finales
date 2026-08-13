<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [
        'apellido_nombre',
        'dni',
        'edad',
        'fecha_nacimiento',
        'domicilio',
        'celular',
        'ocupacion',
        'obra_social',
        'numero_afiliacion',
        'profesional_deriva',
        'fecha_inicio_tratamiento',
        'fecha_cirugia',
        'tto',
        'sesiones',
        'diagnostico',
        'medico_asignado',
    ];
}