<?php

use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\ObjetivoController;

/*
|--------------------------------------------------------------------------
| Historia                                      | Alejo, Esteban
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::resource('historia', HistoriaController::class);
    Route::resource('objetivo', ObjetivoController::class);
});
