<?php
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\ObjetivoController;

/*
|--------------------------------------------------------------------------
| Historia                                      | Alejo, Esteban
|--------------------------------------------------------------------------
*/
Route::resource('historia', HistoriaController::class);
Route::resource('objetivo', ObjetivoController::class);
