<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Carrerasede extends Pivot
{
    use HasFactory;

    public function sede(){
    	return $this->belongsTo(Sede::class, 'sede_id');
    }    
}
 