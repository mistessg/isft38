<?php
use App\Models\Etiqueta;

/*
|--------------------------------------------------------------------------
| Inicio                                                    | Iván, Martín
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $novedades = array();
    $e = Etiqueta::where('nombre','novedades')->first();
    if( !empty($e) ) {   
      $novedades = $e->novedades()->get();     
    }    
    return view('frontend.carrousel.carrousel', compact('novedades'));
      
});
 