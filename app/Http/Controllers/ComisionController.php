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
        $sede = Sede::find($request->input('sede_id'));
        $sedes = Sede::pluck('descripcion', 'id');

        $comision = $request->input('comision');
       
        $comision = Horario::where('sede_id', $sede->id)->get();
    
            return view('backend.horario.create', compact('sede','sedes','comision'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [ 'sede_id' => 'required',
            'comision' => 'required'
            ]
         );

         $comision = Comision::where('sede_id', $request->input('sede_id'))
         ->where('comision',$request->input('comision'))->first();

         if(empty($comision)){ $comision = new Comision(); }
         $comision->sede_id = $request->input('sede_id');
         $comision->comision = $request->input('comision');
         $comision->save();

         return redirect()->route('comision',['sede'=>$comision->sede_id]); 
    
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
                'comision' => ['required']
            ]
        );

        $horarios->update($validateData);
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
        return redirect()->route('backend.comision.index', $comision->$id);
    }
}
