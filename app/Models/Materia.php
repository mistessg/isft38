<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'materia',
    ];

        public function deCarrera(){
            return $this->belongsTo(Carrera::class, 'carrera_id');
        }

}
