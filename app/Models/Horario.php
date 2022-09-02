<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;
use App\Models\Sede;
use App\Models\Carrera;

class Horario extends Model
{
    use HasFactory;

    public function materia(){
    	return $this->belongsTo(Materia::class, 'materia_id');
    } 

    public function sede(){
    	return $this->belongsTo(Sede::class, 'sede_id');
    } 

    public function carrera(){
    	return $this->belongsTo(Carrera::class, 'carrera_id');
    } 
}
