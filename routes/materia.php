<?php

use App\Http\Controllers\MateriaController;

/*
|--------------------------------------------------------------------------
| Materia                                               | Iván, Martín
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::resource('materia', MateriaController::class);
});
