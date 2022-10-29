<?php

use App\Http\Controllers\ProfesorController;

/*
|--------------------------------------------------------------------------
| Profesor                                         | Aylén, Sofía, Ulises
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['admin']], function () {
    Route::resource('profesor', ProfesorController::class);
});

Route::get('/profesores/login', [ProfesorController::class, 'login']);
