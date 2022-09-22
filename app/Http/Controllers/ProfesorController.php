<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::all();
        return view('backend.profesor.index');
    }

    public function login()
    {
        return view('frontend.profesor.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = Profesor::select("id", DB::raw("CONCAT(profesors.apellido,', ',profesors.nombre) as nombrecompleto"))
            ->pluck('nombrecompleto', 'id');
        return view('backend.profesor.create', compact('profesor'));
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
            [
                'nombre' => ['required'],
                'apellido' => ['required']
            ]
        );

        $profesor = new Profesor();

        $profesor->nombre = $request->input('nombre');
        $profesor->apellido = $request->input('apellido');
        $profesor->save();
        $request->session()->flash('status', 'Se guardó correctamente el profesor ' . $profesor->apellido);
        return redirect()->route('profesor.create');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = Profesor::all();
        return view('backend.profesor.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = Profesor::select("id", DB::raw("CONCAT(profesors.apellido,', ',profesors.nombre) as nombrecompleto"))
            ->pluck('nombrecompleto', 'id');
        return view('backend.profesor.edit', compact('comision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profesor = Profesor::findOrFail($id);

        $validateData = $request->validate(
            [
                'nombre' => ['required'],
                'apellido' => ['required']
            ]
        );

        $profesor->nombre = $request->input('nombre');
        $profesor->apellido = $request->input('apellido');
        $profesor->save();
        $request->session()->flash('status', 'Se guardó correctamente el profesor ' . $profesor->apellido);
        return redirect()->route('profesor.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        $profesor->save();
        return redirect()->route('backend.profesor.index', $profesor->$id);
    }
}
