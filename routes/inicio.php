<?php
use App\Models\Etiqueta;

/*
|--------------------------------------------------------------------------
| Inicio                                                    | Iván, Martín
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $e = Etiqueta::where('nombre','novedades')->first();
    $novedades = $e->novedades()->get();
    
    return view('frontend.carrousel.carrousel', compact('novedades'));
});
 