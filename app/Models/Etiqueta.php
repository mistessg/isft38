<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Noticia;
use App\Models\NoticiaEtiqueta;

class Etiqueta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function noticias(){
        return $this->belongsToMany(Noticia::class, 'noticias_etiquetas')
          ->withPivot('user_id')
          ->withTimestamps()
          ->using(NoticiaEtiqueta::class);
    }

}