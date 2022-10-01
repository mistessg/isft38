<?php

use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ModuloController;

/*
|--------------------------------------------------------------------------
| Horario y Módulos horarios                           Aylén, Sofía, Ulises
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::resource('modulo', moduloController::class);
    Route::resource('horario', HorarioController::class);
    Route::post('horario/search', [HorarioController::class, 'search'])->name('horario.search');
    Route::get('horario/{sede}/{carrera}/{anio}/{comision}', [HorarioController::class, 'searchCarrera'])->name('horario.search.carrera');
    Route::post('horario/createHorario', [HorarioController::class, 'createHorario'])->name('horario.createHorario');
});

Route::get('/horarios/porCarrera', [HorarioController::class, 'porCarrera'])->name('horarios.porCarrera');


Route::post('horarios/searchPorCarrera', [HorarioController::class, 'searchCarreraUser'])->name('horarios.searchPorCarrera');
Route::get('horarios/{sede}/{carrera}/{anio}/{comision}', [HorarioController::class, 'searchCarreraUser'])->name('horarios.search.PorCarrera');


Route::get('/horarios/porProfesor', [HorarioController::class, 'porProfesor'])->name('horarios.porProfesor');
Route::post('/horarios/porProfesor', [HorarioController::class, 'searchProfesor'])->name('horarios.show.porProfesor');
Route::get('/horarios/porDiaHora', [HorarioController::class, 'porDiaHora'])->name('horarios.searchPorDiaHora');
