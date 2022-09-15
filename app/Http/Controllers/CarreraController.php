<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::all();
        return view('backend.carrera.index', compact('carreras'));
    }
    public function create()
    {
        $carreras = Carrera::pluck('descripcion','id');
        return view('backend.carrera.create', compact('carreras'));
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
              'resolucion' => 'required|unique:carreras',
              'anios' => 'required',
              'texto' => 'required',
              'nombre_carpeta' => 'required',
              'imagen' => 'image|max:2048']
         );
        $carrera = new carrera(); 
        $carrera->descripcion = $request->input('descripcion');
        $carrera->resolucion = $request->input('resolucion');
        $carrera->anios = $request->input('anios'); 
        $carrera->texto = $request->input('texto'); 
        $carrera->nombre_carpeta = $request->input('nombre_carpeta'); 
        $archivoImagen = $request->file('imagen'); 
         // dd($carrera);
         if ($request->hasFile('imagen')) {
             $archivoImagen = $request->file('imagen');
             $path = $archivoImagen->storeAs('public/carreras/' . $carrera->id, $archivoImagen->getClientOriginalName() ); 
             $savedPath  =str_replace("public/", "", $path);
             $carrera->imagen = $savedPath;
        }
        $carrera->save();
        

       // $request->session()->flash('status', 'Se guardó correctamente la carrera '. $carrera->descripcion);
       return redirect()->route('carrera.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Carrera $carrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carreras = Carrera::find($id);
        return view('backend.carrera.edit', compact('carreras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, $id)
    {
        $carrera = carrera::findOrFail($id);
        $validatedData = $request->validate(
            [ 'descripcion' => 'required',
              'resolucion' => 'required',
              'anios' => 'required',
              'texto' => 'required',
              'nombre_carpeta' => 'required',
              'imagen' => 'image|max:2048']
         );
         $carrera->descripcion = $request->input('descripcion');
         $carrera->resolucion = $request->input('resolucion');
         $carrera->anios = $request->input('anios'); 
         $carrera->texto = $request->input('texto'); 
         $carrera->nombre_carpeta = $request->input('nombre_carpeta'); 
         $archivoImagen = $request->file('imagen'); 
         if ($request->hasFile('imagen')) {
            $archivoImagen = $request->file('imagen');
            $path = $archivoImagen->storeAs('public/carreras/' . $carrera->id, $archivoImagen->getClientOriginalName() ); 
            $savedPath  =str_replace("public/", "", $path);
            $carrera->imagen = $savedPath;   
            $carrera->save();   
       }
        $carrera->save($validatedData);    
        return redirect()->route('carrera.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $carrera = carrera::findOrFail($id);    
         $carrera->delete();
         return redirect()->route('carrera.index');
    }
}
