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
use App\Http\Controllers\UserController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\NoticiaController;

 /// https://prod.liveshare.vsengsaas.visualstudio.com/join?742FD580CF56B9B316F755DF6AB909453F40
//
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

/*
|--------------------------------------------------------------------------
| Resource
|--------------------------------------------------------------------------
*/
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

 //programa
Route::get('/programa/cargarPrograma', [ProgramaController::class, 'CargarPrograma']);
Route::get('/programa/programasPendientes', [ProgramaController::class, 'ProgramasPendientes']);
Route::post('/programa/search', [ProgramaController::class, 'search'])->name('programa.search');
Route::resource('programa', ProgramaController::class);
Route::post('horario/search', [HorarioController::class, 'search'])->name('horario.search');;

Route::resource('anio', AnioController::class);
Route::resource('carrera', CarreraController::class);
Route::resource('comision', ComisionController::class);
Route::resource('objetivo', objetivoController::class);
Route::resource('profesor', ProfesorController::class);
Route::resource('programa', ProgramaController::class);
Route::resource('sede', SedeController::class);

//horarios
Route::get('/horarios/porProfesor', [HorarioController::class, 'porProfesor']);
Route::get('/horarios/porCarrera', [HorarioController::class, 'porCarrera']);
Route::get('/horarios/porDiaHora', [HorarioController::class, 'porDiaHora']);

Route::middleware(['auth'])->group(function () {
Route::resource('noticias', NoticiaController::class);
Route::resource('etiquetas', EtiquetaController::class);
Route::resource('users', UserController::class);
 });
        
/*
|--------------------------------------------------------------------------
| Filtros: Imágenes, Autores y etiquetas
|--------------------------------------------------------------------------
*/
Route::get('noticias/imagenes/page/{page?}', [NoticiaController::class, 'conImagenesPage'])->name('noticias.imagenes');
Route::get('noticias/autor/{autor}/{page?}', [NoticiaController::class, 'porAutor'])->name('noticias.autor');
Route::get('noticias/etiqueta/{etiqueta}/{page?}', [NoticiaController::class, 'porEtiqueta'])->name('noticias.etiqueta');
Route::get('noticias/carrera/{carrera}/{page?}', [NoticiaController::class, 'deCarrera'])->name('noticias.carrera');
 
Route::get('blog', [NoticiaController::class, 'blog'])->name('noticias.blog');
Route::get('blog/autor/{autor}/{page?}', [NoticiaController::class, 'porAutorBlog'])->name('blog.autor');
Route::get('blog/etiqueta/{etiqueta}/{page?}', [NoticiaController::class, 'porEtiquetaBlog'])->name('blog.etiqueta');
Route::get('blog/carrera/{carrera}/{page?}', [NoticiaController::class, 'deCarreraBlog'])->name('blog.carrera');
        
/*
|--------------------------------------------------------------------------
| Autorizaciones
|
| composer require laravel/ui --dev
| php artisan ui bootstrap --auth
| npm install && npm run dev
| Note: Add Bootstrap links in layout/app
| php artisan storage:link  -> para imágenes
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 

    
