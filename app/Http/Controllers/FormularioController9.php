<?php

namespace App\Http\Controllers;



class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
        return view('backend.formularios.formulario');
    }


public function procesarFormulario($request)
{
    $dni = $request->input('dni');
    $carrera = $request->input('carrera');
    $hora = $request->input('hora');
    $fecha = $request->input('fecha');

    // Aquí puedes realizar las acciones necesarias con los datos recibidos, como almacenarlos en la base de datos, enviar un correo electrónico, etc.

    // Redirige a una página de éxito o muestra un mensaje de éxito
    return redirect()->route('formulario')->with('success', 'Formulario enviado correctamente');
}
}
