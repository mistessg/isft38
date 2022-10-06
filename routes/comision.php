<?php

use App\Http\Controllers\ComisionController;
use App\Http\Controllers\AnioController;

/*
|--------------------------------------------------------------------------
| Comisión y Año                                   | Aylén, Sofía, Ulises
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::resource('comision', ComisionController::class);
    Route::resource('anio', AnioController::class);
});
