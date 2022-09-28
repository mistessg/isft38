<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = Sede::all();
        return view('backend.sede.index', compact('sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sede.create' );
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
              'calle' => 'required',
              'numero' => 'required',
              'ciudad' => 'required',
              'sedeimagen' => 'required|image|max:2048']
         );
        $sede = new sede(); 
        $sede->descripcion = $request->input('descripcion');
        $sede->calle = $request->input('calle');
        $sede->numero = $request->input('numero'); 
        $sede->ciudad = $request->input('ciudad'); 
        $archivoImagen = $request->file('sedeimagen'); 
         if ($request->hasFile('sedeimagen')) {
             $archivoImagen = $request->file('sedeimagen');
             $path = $archivoImagen->storeAs('public/sedes/' . $sede->id, $archivoImagen->getClientOriginalName() ); 
             $savedPath  =str_replace("public/", "", $path);
             $sede->sedeimagen = $savedPath;
        }
        $sede->save();
        $request->session()->flash('status', 'Se guardó correctamente la sede '. $sede->descripcion);
       return redirect()->route('sede.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sede = Sede::findOrFail($id);
        return view('backend.sede.show', compact('sede'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede = Sede::findOrFail($id);
        return view('backend.sede.edit', compact('sede'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sede = Sede::findOrFail($id);
        $validatedData = $request->validate(
            [ 'descripcion' => 'required',
              'calle' => 'required',
              'numero' => 'required',
              'ciudad' => 'required',
              'sedeimagen' => 'required|image|max:2048']
         );
         $sede->descripcion = $request->input('descripcion');
         $sede->calle = $request->input('calle');
         $sede->numero = $request->input('numero'); 
         $sede->ciudad = $request->input('ciudad'); 
         $archivoImagen = $request->file('sedeimagen'); 
         if ($request->hasFile('sedeimagen')) {
            $archivoImagen = $request->file('sedeimagen');
            $path = $archivoImagen->storeAs('public/sedes/' . $sede->id, $archivoImagen->getClientOriginalName() ); 
            $savedPath  =str_replace("public/", "", $path);
            $sede->sedeimagen = $savedPath;   
            $sede->save();   
       }
        $sede->save($validatedData);  
     
        $request->session()->flash('status', 'Se guardó correctamente la sede '. $sede->descripcion);
        return redirect()->route('sede.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sede = Sede::findOrFail($id);    
        $sede->delete();
        return redirect()->route('sede.index');
    }
}
