<?php

namespace App\Http\Controllers;

use App\Models\Anio;
use App\Models\Profesor;
use App\Models\Carrera;
use App\Models\Sede;
use App\Models\Materia;
use App\Models\Comision;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        return view('frontend.horarios.tablaCarreras');
    }*/
    public function index()
    {
        $carreras = Carrera::pluck('descripcion', 'id');
        $anios = Anio::pluck('anio', 'id');
        $comisions = Comision::pluck('comision', 'id');
        $sedes = Sede::pluck('descripcion', 'id');
        return view('backend.horario.index', compact('carreras', 'anios', 'comisions', 'sedes'));
    }
    public function porProfesor()
    {
        return view('frontend.horarios.porProfesor');
    }
    public function porCarrera()
    {
        return view('frontend\horarios\porCarerra');
    }
    public function porDiaHora()
    {
        return view('frontend\horarios\porDiaHora');
    }
    public function create()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {  // dd($request);
         $sede = Sede::findOrFail($request->input('sede_id'));
        $sedes = Sede::pluck('descripcion','id');
     
         $carrera = Carrera::findOrFail($request->input('carrera_id'));
        $anio = Anio::findOrFail($request->input('anio_id'));
         $profesor = Profesor::findOrFail($request->input('profesor_id'));
         $materia = Materia::findOrFail($request->input('materia_id'));
         $dia = Horario::findOrFail($request->input('dia'));
         $moduloHorario = Horario::findOrFail($request->input('moduloHorario_id'));
         $comentario = Horario::findOrFail($request->input('comentario'));
 dd($request);

        $horarios = Horario::where('sede_id',$sede->id)
                           ->where('carrera_id',$carrera->id)
                            ->where('anio_id',$anio->id)
                          ->where('profesor_id',$profesor->id)
                           ->where('dia',$dia)
                            ->where('moduloHorario_id',$moduloHorario->id)->get();
        
         return view('backend.horario.show', compact('sede','carrera', 'sedes', 'horarios', 'anio', 
         'profesor', 'materia', 'dia', 'moduloHorario', 'comentario'));
        return view('backend.horario.show');
 
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $horarios = Horario::all();
        // return view('backend.horario.show', compact('horarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horarios = Horario::findOrFail($id);
        return view('backend.horario.edit', compact('horarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $horarios = Horario::findOrFail($id);
        $validateData = $request->validate(
            [
                'sede_id' => ['required'],
                'carrera_id' => ['required'],
                'anio_id' => ['required'],
                'profesor_id' => ['required'],
                'materia_id' => ['required'],
                'comision_id' => ['required'],
                'dia' => ['required'],
                'modulohorario_id' => ['required'],
                'duracion' => ['required']
            ]
        );

        $horarios->save();
        $request->session()->flash('status', 'Se modificó correctamente el horario');
        return redirect()->route('backend.horario.edit', $horarios->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horarios = Horario::findOrFail($id);
        $horarios->delete();
        $horarios->save();
        $horarios->session()->flash('status', 'Se eliminó correctamente el horario');
        return redirect()->route('backend.horario.index', $horarios->$id);
    }
}
