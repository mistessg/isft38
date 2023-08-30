<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;

class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones';

    protected $fillable = [
        'fecha',
        'hora',
        'dni',
        'carrera_id',
         'hash',
    ];

    public function save(array $options = [])
    {
        $isCreating = !$this->exists;
        parent::save($options);

        if ($isCreating) {
            $this->restarCupo();
        }
    }

    public function restarCupo()
    {
        $cupo = Cupo::find($this->id); // Suponiendo que el ID de la inscripción coincide con el ID del cupo
        if ($cupo) {
          //  $cupo->cupos -= 1;
            $cupo->reservados += 1;
            $cupo->save();
        }
    }

    public function deCarrera(){
    	return $this->belongsTo(Carrera::class, 'carrera_id');
    }


}
