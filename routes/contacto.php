<?php

use App\Http\Controllers\SedeController;
use App\Http\Controllers\SedeemailController;
use App\Http\Controllers\SedetelefonoController;
use App\Models\Sede;

/*
|--------------------------------------------------------------------------
| Contacto y Sede                                     | Alejo, Esteban
|--------------------------------------------------------------------------
*/

Route::get('/contacto', function () {
    $sedes = Sede::all();
    return view('frontend.sede.contacto', compact('sedes'));
});
Route::middleware(['auth'])->group(function () {
    Route::resource('sede', SedeController::class);
    Route::resource('sedeemail', SedeemailController::class);
    Route::resource('sedetelefono', SedetelefonoController::class);
});
