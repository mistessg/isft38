<?php

namespace App\Http\Controllers;

use App\Models\Comision;
use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Sede;
class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::pluck('descripcion', 'id');
        $sedes = Sede::pluck('descripcion', 'id');
        return view('backend.comision.index', compact('carreras', 'sedes'));
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
     * Display the specified resource.
     *
     * @param  \App\Models\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function show(Comision $comision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        $comision = Horario::findOrFail($id);
        return view('backend.horario.edit', compact('comision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $comision, $id)
    {
        $comision = Horario::findOrFail($id);
        $validateData = $request->validate(
            [
                'sede_id' => ['required'],
                'carrera_id' => ['required'],
                'materia_id' => ['required'],
                'comision' => ['required']
        );

        $horarios->save();
        $request->session()->flash('status', 'Se modificó correctamente el horario');
        return redirect()->route('backend.comision.edit', $comision->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comision = Comision::FindOrFail($id);
        $comision -> delete();
        $comision -> save();
        $comision->session()->flash('status', 'Se eliminó correctamente la comision');
        return redirect()->route('backend.comision.index', $comision->$id);
    }
}
