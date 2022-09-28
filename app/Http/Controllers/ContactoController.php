<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$contactos = Contacto::all();
        $sedes = Sede::all();
        return view('backend.contacto.index', compact('sedes'));
    }
    public function create()
    {
        $contactos = Contacto::pluck('descripcion','id');
        return view('backend.contacto.create', compact('contactos'));
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
            [ 'nombre' => 'required',
              'email' => 'required',
              'mensaje' => 'required',

         );
        $contacto = new contacto();
        $contacto->nombre = $request->input('nombre');
        $contacto->email = $request->input('email');
        $contacto->mensaje = $request->input('mensaje');

        }
        $contacto->save();


       // $request->session()->flash('status', 'Se guardó correctamente la carrera '. $carrera->descripcion);
       return redirect()->route('contacto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactos = Contacto::find($id);
        return view('backend.contacto.edit', compact('contactos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, $id)
    {
        $contacto = contacto::findOrFail($id);
        $validatedData = $request->validate(
            [ 'nombre' => 'required',
              'email' => 'required',
              'mensaje' => 'required',

         );
         $contacto->nombre = $request->input('nombre');
         $contacto->email = $request->input('email');
         $contacto->mensaje = $request->input('mensaje');

        $contacto->save();
       }
        $contacto->save($validatedData);
        return redirect()->route('contacto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $contacto = contacto::findOrFail($id);
         $contacto->delete();
         return redirect()->route('contacto.index');
    }
}
