<?php
use App\Http\Controllers\ProgramaController;

/*
|--------------------------------------------------------------------------
| Programa                                         | Alejandro, Brian
|--------------------------------------------------------------------------
*/
Route::get('/programa/cargarPrograma', [ProgramaController::class, 'CargarPrograma']);
Route::post('/programa/search', [ProgramaController::class, 'search'])->name('programa.search');
Route::get('/programa/programasPendientes', [ProgramaController::class, 'ProgramasPendientes']);
Route::resource('programa', ProgramaController::class);
