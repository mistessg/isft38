<?php
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ModuloController;

/*
|--------------------------------------------------------------------------
| Horario y Módulos horarios                           Aylén, Sofía, Ulises
|--------------------------------------------------------------------------
*/
Route::resource('modulo', moduloController::class);

Route::resource('horario', HorarioController::class);
Route::post('horario/search', [HorarioController::class, 'search'])->name('horario.search');
Route::post('horario/searchPorCarrera', [HorarioController::class, 'searchPorCarrera'])->name('horarios.search');
Route::get('horario/{sede}/{carrera}/{anio}/{comision}', [HorarioController::class, 'searchCarrera'])->name('horario.search.carrera');
Route::get('horarios/{sede}/{carrera}/{anio}/{comision}', [HorarioController::class, 'searchCarreraUser'])->name('horarios.search.porcarrera');
Route::post('horario/createHorario', [HorarioController::class, 'createHorario'])->name('horario.createHorario');
Route::get('/horarios/porProfesor', [HorarioController::class, 'porProfesor']);
Route::get('/horarios/porCarrera', [HorarioController::class, 'porCarrera']);
Route::get('/horarios/porDiaHora', [HorarioController::class, 'porDiaHora']);
