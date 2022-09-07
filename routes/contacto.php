<?php
use App\Http\Controllers\SedeController;
use App\Http\Controllers\SedeemailController;
use App\Http\Controllers\SedetelefonosController;

/*
|--------------------------------------------------------------------------
| Contacto y Sede                                     | Alejo, Esteban
|--------------------------------------------------------------------------
*/
Route::get('/contacto', function () {
    return view('frontend.sede.contacto');
});

Route::resource('sede', SedeController::class);