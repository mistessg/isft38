<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Carrera;
use App\Models\Sede;
use App\Models\Anio;
use App\Models\Profesor;
use App\Models\Materia;
use App\Models\Comision;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = array();
        $programas = array();
        $anios = Anio::all();
        $carreras = Carrera::pluck('descripcion','id');
        $comisiones = Comision::pluck('comision', 'id');
        $materias = Materia::pluck('descripcion', 'id');
        $profesores = Profesor::pluck('nombre','apellido','id');
        $sedes = Sede::pluck('descripcion','id');
        $year = date("Y");
        $periodo = '';
        $sede = '';
        $carrera = '';
        $comision = '';
        for ($i = $year; $i >= $year - 10; $i--) {
            $periodos[$i] = $i;
        }
        
        return view('frontend.programa.listado_programa', compact('carreras','sedes','comisiones','materias','profesores', 'anios', 'programas','periodos', 'periodo', 'sede', 'carrera','comision'));
    }

    public function CargarPrograma(){
        return view('frontend.programa.cargar_programa');
    }

    public function ProgramasPendientes(){
     
        $periodos = array();
        $programas = array();
        $anios = Anio::all();
        $carreras = Carrera::pluck('descripcion','id');
        $comisiones = Comision::pluck('comision', 'id');
        $materias = Materia::all();
        $profesores = Profesor::pluck('nombre','apellido','id');
        $sedes = Sede::pluck('descripcion','id');
        $year = date("Y");
        $periodo = '';
        $sede = '';
        $carrera = '';
        $comision = '';
        for ($i = $year; $i >= $year - 10; $i--) {
            $periodos[$i] = $i;
        }
        //dd($materias);
        return view('frontend.programa.programas_pendientesG', compact('carreras','sedes','comisiones','materias','profesores', 'anios', 'programas','periodos', 'periodo', 'sede', 'carrera','comision'));
    }

    public function ProgramasPendientesSearch(Request $request)
    {
        $periodos = array();
       
        $anios = Anio::all();
        
        $carreras = Carrera::pluck('descripcion','id');
        $comisiones = Comision::pluck('comision', 'id');
        //$materias = Materia::pluck('descripcion', 'id');
        $profesores = Profesor::pluck('nombre','apellido','id');
        $sedes = Sede::pluck('descripcion','id');
        $year = date("Y");
        
        for ($i = $year; $i >= $year - 10; $i--) {
            $periodos[$i] = $i;
        }
        
       $periodo =$request->input('anio_id');
       $sede =$request->input('sede_id');
       $carrera =$request->input('carrera_id');
       $comision =$request->input('comision_id');

      $startDate = Carbon::createFromFormat('Y-m-d', $request->input('anio_id') . '-01-01');
      $endDate = Carbon::createFromFormat('Y-m-d', $request->input('anio_id') . '-12-31');
 
      $programas = Programa::where('sede_id', $request->input('sede_id'))
      ->where('carrera_id', $request->input('carrera_id')) 
      ->where('comision_id', $request->input('comision_id')) 
      ->whereBetween('created_at', [$startDate,$endDate ])
      ->OrderBy('anio_id')->get();
 
      $materias = Materia::where('carrera_id', $request->input('carrera_id'))->get();
        
      return view('frontend.programa.programas_pendientesG', compact('carreras','sedes','comisiones','materias','profesores', 'anios','programas','periodo', 'periodos', 'sede', 'carrera','comision'));      
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sede = Sede::all();
        $carreras = Carrera::all();
        $anios = Anio:all();
        $materias = Materia::all();
        $profesores = Profesor:all();
        return view('frontend.programa.create', compact('sede','carreras','anios','materias','profesores'));
    }

    public function GuardarPrograma(Request $request)
    {
        $programa = new Programa();
        $programa->sede_id = $request->input('sede_id');
        $programa->carrera_id = $request->input('carrera_id');
        
        if ($request->hasFile('archivo1')) {
            $archivoImagen = $request->file('archivo1');
            $path = $archivoImagen->storeAs('public/programas/' . $noticia->id, $archivoImagen->getClientOriginalName() ); 
            $savedPath  =str_replace("public/", "", $path);
            $noticia->archivo1 = $savedPath;   
            $noticia->save();   
       } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programa = new Programa();
        $programa->sede_id = $request->input('sede_id');
        $programa->carrera_id = $request->input('carrera_id');
        $programa->anio_id = $request->input('anio_id');
        $programa->materia_id = $request->input('materia_id');
        $programa->comision_id = $request->input('comision_id');
        $programa->profesor_id = $request->input('profesor_id');
        $programa->fechaentrega = $request->input('fechaentrega');

        $programa->save();

        if ($request->hasFile('nombrearchivo')) {
            $archivo = $request->file('nombrearchivo');
            $path = $archivo->storeAs('public/programa/' . $programa->id, $archivo->getClientOriginalName() ); 
            $savedPath  =str_replace("public/", "", $path);
            $programa->nombrearchivo = $savedPath;   
            $programa->save();   
       } 
    }

        /**
     * Search a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $periodos = array();
       
        $anios = Anio::all();
        
        $carreras = Carrera::pluck('descripcion','id');
        $comisiones = Comision::pluck('comision', 'id');
        $materias = Materia::pluck('descripcion', 'id');
        $profesores = Profesor::pluck('nombre','apellido','id');
        $sedes = Sede::pluck('descripcion','id');
        $year = date("Y");
        
        for ($i = $year; $i >= $year - 10; $i--) {
            $periodos[$i] = $i;
        }
        
       $periodo =$request->input('anio_id');
       $sede =$request->input('sede_id');
       $carrera =$request->input('carrera_id');
       $comision =$request->input('comision_id');

      $startDate = Carbon::createFromFormat('Y-m-d', $request->input('anio_id') . '-01-01');
      $endDate = Carbon::createFromFormat('Y-m-d', $request->input('anio_id') . '-12-31');
 
      $programas = Programa::where('sede_id', $request->input('sede_id'))
      ->where('carrera_id', $request->input('carrera_id')) 
      ->where('comision_id', $request->input('comision_id')) 
      ->whereBetween('created_at', [$startDate,$endDate ])
      ->OrderBy('anio_id')->get();
 
      return view('frontend.programa.listado_programa', compact('carreras','sedes','comisiones','materias','profesores', 'anios','programas','periodo', 'periodos', 'sede', 'carrera','comision'));      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programa = Programa::findOrFail($id);
        return view('backend.historia.show', compact('historia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        //
    }
}
