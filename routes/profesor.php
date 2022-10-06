<?php

use App\Http\Controllers\ProfesorController;

/*
|--------------------------------------------------------------------------
| Profesor                                         | Aylén, Sofía, Ulises
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::resource('profesor', ProfesorController::class);
});

Route::get('/profesores/login', [ProfesorController::class, 'login']);
