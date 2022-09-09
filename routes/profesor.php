<?php
 use App\Http\Controllers\ProfesorController;

/*
|--------------------------------------------------------------------------
| Profesor                                         | Aylén, Sofía, Ulises
|--------------------------------------------------------------------------
*/
Route::resource('profesor', ProfesorController::class);

Route::get('/profesores/login', [ProfesorController::class, 'login']);