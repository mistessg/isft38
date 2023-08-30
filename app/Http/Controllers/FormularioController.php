<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{

    public function mostrarFormulario(){
        return view('backend.formularios.formulario');
    }

    public function procesarFormulario(){

    }

    public function guardar(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'campo1' => 'required',
            'campo2' => 'required',
            // Otros campos del formulario
        ]);

        // Crea una nueva instancia del modelo FormularioAdmin
        $formulario = new FormularioAdmin;

        // Asigna los valores del formulario
        $formulario->campo1 = $request->input('campo1');
        $formulario->campo2 = $request->input('campo2');
        // Otros campos del formulario

        // Guarda el formulario en la base de datos60
        $formulario->save();

        public function confirmacion()
        {
            {
                // Obtener los datos pasados como parámetros
                $datos = session('datos');

                // Retornar la vista de confirmación y pasar los datos como parámetro
                return view('confirmacion', compact('datos'));
            }

            // Redirige a una página de éxito o muestra un mensaje de éxito
            return redirect()->route('formulario')->with('success', 'Formulario guardado correctamente');
        }
    }
}


