<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CarrerasedeController;
use App\Models\Carrera;
use App\Models\Materia;

/*
|--------------------------------------------------------------------------
| Carrera                                                  | Iván, Martín
|--------------------------------------------------------------------------
*/

Route::get('/carreras', function () {
    $carreras = Carrera::all();
    $materias = Materia::all();
    return view('frontend.carreras.index', compact('carreras', 'materias'));
})->name('carreras');
Route::middleware(['auth'])->group(function () {
    Route::resource('carrera', CarreraController::class);
});
