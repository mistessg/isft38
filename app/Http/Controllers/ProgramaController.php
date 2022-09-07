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

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anios = array();
        $anio = Anio::pluck('anio', 'id');
        $carreras = Carrera::pluck('descripcion','id');
        $comisiones = Comision::pluck('comision', 'id');
        $materias = Materia::pluck('descripcion', 'id');
        $profesores = Profesor::pluck('nombre','apellido','id');
        $sedes = Sede::pluck('descripcion','id');
        $anio = date("Y");
        
        for ($i = $anio - 10; $i <= $anio; $i++) {
            $anios[] = $i;
        }
        
        return view('frontend.programa.listado_programa', compact('carreras','sedes','comisiones','materias','profesores', 'anios'));
    }

    public function search(Request $request)
    {

        $programa = Programa::where('sede_id', $request->sede_id)
                            ->where('carrera_id', $request->carrera_id)
                            ->where('fechaentrega', 'LIKE', $request->anio_id.'%');
                            dd($programa);
    }

    public function CargarPrograma(Request $request){
        return view('frontend.programa.cargar_programa');
    }

    public function ProgramasPendientes(){
     
        $carreras = Carrera::pluck('descripcion', 'id');
        $materias = Materia::pluck('descripcion', 'id');
        $programas = Programa::all();
         //dd($programas);
         //dd($carreras);
         //dd($materias);
        return view('frontend.programa.programas_pendientes', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

        /**
     * Search a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
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
