<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnioController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CarrerasedeController;
use App\Http\Controllers\ComisionController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\ObjetivoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\SedeemailController;
use App\Http\Controllers\SedetelefonosController;
 /// https://prod.liveshare.vsengsaas.visualstudio.com/join?742FD580CF56B9B316F755DF6AB909453F40
//Brian
//Alejo
//Ale
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('frontend.layout.main');
});
Route::get('/main/contacto', function () {
    return view('frontend.sede.contacto');
});

/*
|--------------------------------------------------------------------------
| Resource
|--------------------------------------------------------------------------
*/
//programa
Route::get('/programa/cargarPrograma', [ProgramaController::class, 'CargarPrograma']);
Route::get('/programa/programasPendientes', [ProgramaController::class, 'ProgramasPendientes']);


Route::resource('anio', AnioController::class);
Route::resource('carrera', CarreraController::class);
Route::resource('comision', ComisionController::class);
Route::resource('historia', HistoriaController::class);
Route::resource('horario', HorarioController::class);
Route::resource('materia', MateriaController::class);
Route::resource('modulo', moduloController::class);
Route::resource('objetivo', objetivoController::class);
Route::resource('profesor', ProfesorController::class);
Route::resource('programa', ProgramaController::class);
Route::resource('sede', SedeController::class);

//horarios
Route::get('/horarios/porProfesor', [HorarioController::class, 'porProfesor']);
Route::get('/horarios/porCarrera', [HorarioController::class, 'porCarrera']);
Route::get('/horarios/porDiaHora', [HorarioController::class, 'porDiaHora']);

