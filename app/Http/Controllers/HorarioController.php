<?php

namespace App\Http\Controllers;

use App\Models\Anio;
use App\Models\Carrera;
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
//HEAD
    {
        
        return view('backend.horario.index');

    {  $carreras = Carrera::pluck('descripcion','id');
        $anios = Anio::pluck('anio', 'id');
        $comisions = Comision::pluck('comision', 'id');
        return view('backend.horario.createCopia', compact('carreras', 'anios', 'comisions'));
// 0399bcfd9b6bacede999a9c6f7b0fcd60e80a1a2
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
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = Horario::findOrFail($id);
        return view('backend.horario.show',compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::findOrFail($id);
        return view('backend.horario.edit',compact('horario'));
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
        $horario = Horario::findOrFail($id);
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

            $horario->save();
            $request->session()->flash('status','Se modificó correctamente el horario');
            return redirect()->route('backend.horario.edit',$horario->$id);
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horario = Horario::findOrFail($id);
        $horario->delete();
        $busqueda->save();
        $request->session()->flash('status','Se eliminó correctamente el horario');
        return redirect()->route('backend.horario.index',$horario->$id);
    }
}
