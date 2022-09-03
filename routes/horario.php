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
Route::get('/horarios/porProfesor', [HorarioController::class, 'porProfesor']);
Route::get('/horarios/porCarrera', [HorarioController::class, 'porCarrera']);
Route::get('/horarios/porDiaHora', [HorarioController::class, 'porDiaHora']);
