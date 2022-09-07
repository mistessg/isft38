<?php

namespace App\Http\Controllers;

use App\Models\materia;
use Illuminate\Http\Request;

class materiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = materia::all();
        return view('backend.materia.index', compact('materias'));
    }
    public function create()
    {
        $materias = materia::pluck('descripcion','id');
        return view('backend.materia.create', compact('materias'));
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
            [ 'descripcion' => 'required',
              'resolucion' => 'required|unique:materias',
              'anios' => 'required',
              'texto' => 'required',
              'nombre_carpeta' => 'required',
              'imagen' => 'image|max:2048']
         );
        $materia = new materia(); 
        $materia->descripcion = $request->input('descripcion');
        $materia->resolucion = $request->input('resolucion');
        $materia->anios = $request->input('anios'); 
        $materia->texto = $request->input('texto'); 
        $materia->nombre_carpeta = $request->input('nombre_carpeta'); 
        $archivoImagen = $request->file('imagen'); 
         // dd($materia);
        $materia->save();
        
        if ($request->hasFile('imagen')) {
            $archivoImagen = $request->file('imagen');
            $path = $archivoImagen->storeAs('public/materias/' . $materia->id, $archivoImagen->getClientOriginalName() ); 
            $savedPath  =str_replace("public/", "", $path);
            $materia->imagen = $savedPath;   
            $materia->save();   
       }

       // $request->session()->flash('status', 'Se guardó correctamente la materia '. $materia->descripcion);
       // return redirect()->route('backend.materia.create'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, $id)
    {
        $materia = materia::findOrFail($id);
        $validatedData = $request->validate(
            [ 'descripcion' => 'required',
              'resolusion' => 'required|unique:materias',
              'anios' => 'required',
              'texto' => 'required',
              'image' => 'image|max:2048']
         );
        $materia->update($validatedData);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $materia = materia::findOrFail($id);    
         $materia->delete();
         return redirect()->route('backend.materia.index');
    }
}
