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

    public function anio(){
    	return $this->belongsTo(Anio::class, 'anio_id');
    } 
    public function carrera(){
    	return $this->belongsTo(Carrera::class, 'carrera_id');
    } 
    public function profesor(){
    	return $this->belongsTo(Profesor::class, 'profesor_id');
    } 
    public function dia(){
    	return $this->belongsTo(Horario::class, 'dia');
    } 
    public function moduloHorario(){
    	return $this->belongsTo(Horario::class, 'moduloHorario_id');
    } 
    public function comentario(){
    	return $this->belongsTo(Horario::class, 'comentario');
    } 
}
