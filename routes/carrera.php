<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CarrerasedeController;
use App\Models\Carrera;

/*
|--------------------------------------------------------------------------
| Carrera                                                  | Iván, Martín
|--------------------------------------------------------------------------
*/

Route::get('/carreras', function () {
    $carreras = Carrera::all();
    return view('frontend.carreras.index', compact('carreras'));
});
Route::middleware(['auth'])->group(function () {
    Route::resource('carrera', CarreraController::class);
});
