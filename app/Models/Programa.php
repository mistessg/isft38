<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    protected $fillable = [
        'NombreArchivo', 
        'Ruta', 
        'fechaEntrega',
        'Sede_id',
        'Carrera_id',
        'Anio_id',
        'Materia_id',
        'Comision_id',
        'Profesor_id'
    ];
}
