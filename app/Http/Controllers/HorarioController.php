<?php

namespace App\Http\Controllers;

use App\Models\Anio;
use App\Models\Carrera;
use App\Models\Sede;
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
    public function index()
    {
        return view('frontend.horarios.tablaCarreras');
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $carreras = Carrera::pluck('descripcion','id');
        $anios = Anio::pluck('anio', 'id');
        $comisions = Comision::pluck('comision', 'id');
        $sedes = Sede::pluck('descripcion', 'id');
        return view('backend.horario.create', compact('carreras', 'anios', 'comisions', 'sedes'));
 
    }

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
        return view('backend.horario.show', compact('sede','carrera', 'sedes'));
 
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $horarios = Horario::all();
        return view('backend.horario.show',compact('horarios'));
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
        return view('backend.horario.edit',compact('horarios'));
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
            $request->session()->flash('status','Se modificó correctamente el horario');
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
        $horarios->session()->flash('status','Se eliminó correctamente el horario');
        return redirect()->route('backend.horario.index', $horarios->$id);
    }
}
