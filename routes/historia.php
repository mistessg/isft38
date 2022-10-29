<?php

use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\ObjetivoController;

/*
|--------------------------------------------------------------------------
| Historia                                      | Alejo, Esteban
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['admin']], function () {
    Route::resource('historia', HistoriaController::class);
    Route::resource('objetivo', ObjetivoController::class);
});
