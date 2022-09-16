<?php
use App\Http\Controllers\ProgramaController;

/*
|--------------------------------------------------------------------------
| Programa                                         | Alejandro, Brian
|--------------------------------------------------------------------------
*/
Route::get('/programa/cargarPrograma', [ProgramaController::class, 'CargarPrograma']);
Route::post('/programa/search', [ProgramaController::class, 'search'])->name('programa.search');
Route::post('/programa/programasPendientes/search', [ProgramaController::class, 'ProgramasPendientesSearch'])->name('programa.pendiente.search');
Route::get('/programa/programasPendientes', [ProgramaController::class, 'ProgramasPendientes']);
Route::resource('programa', ProgramaController::class);
