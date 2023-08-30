<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
use Carbon\Carbon;
use App\Models\Inscripcion;
use App\Models\Carrera;

class CancelarTurnoController extends Controller
{
    public function cancelarturno()
    {
        return view('backend.admin-form.cancelarturnos');
    }

    public function eliminarDatos(Request $request)
    {
        $hash = $request->input('hash');

        // Verificar si el DNI existe en la base de datos
        $inscripcion = Inscripcion::where('hash', $hash)->first();

        if ($inscripcion) {
            // Si el Hash existe, eliminar los datos
            $inscripcion->delete();

            return redirect()->back()->with('success', 'Los datos se eliminaron correctamente.');
        } else {
            return redirect()->back()->with('error', 'El Hash no se encuentra registrado en la base de datos.');
        }
    }

    public function cancelar($codigo)
    {
        $hash = $codigo;

        // Verificar si el DNI existe en la base de datos
        $inscripcion = Inscripcion::where('hash', $hash)->first();

        if ($inscripcion) {
            // Si el Hash existe, eliminar los d/atos
            $inscripcion->delete();

           return'Los datos se eliminaron correctamente';
        } else {
            return 'El Hash no se encuentra registrado en la base de datos.';
        }


    }

}
