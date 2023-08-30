<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionesController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::all();
        return view('backend.admin-form.tablainscripciones',compact('inscripciones'));
    }



    public function tablaInscripciones()
    {
        $inscripciones = Inscripcion::all();
        return view('backend.admin-form.tablainscripciones',compact('inscripciones'));
    }

    public function create()
    {
        return view('backend.admin-form.create');
    }

    public function store(Request $request)
    {
        Inscripcion::create($request->all());
        return redirect()->route('tablainscripciones.index');
        $inscripcion = new Inscripcion();
        // Asignar valores a los campos de la instancia

        $inscripcion->save();

        // Restar el cupo correspondiente a la inscripción guardada
        $inscripcion->restarCupo();

    }

    public function edit(Inscripcion $inscripcion)
    {
        $carreras = Carrera::all();

        return view('backend.admin-form.edit', compact('inscripcion', 'carreras'));
    }

    public function update(Request $request, Inscripcion $inscripcion)
    {
        $inscripcion->update($request->all());
        return redirect()->route('tablainscripciones.index');
        //return view('backend.admin-form.tablainscripciones',compact('inscripcion'));
    }

    public function destroy(Inscripcion $inscripcion)
    {
        $inscripcion->delete();
        return redirect()->route('tablainscripciones.index');
    }
}
