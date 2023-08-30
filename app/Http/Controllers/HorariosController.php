<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
use Carbon\Carbon;
use App\Models\Inscripcion;
use App\Models\Carrera;
use Illuminate\Support\Facades\Session;

class HorariosController extends Controller
{
    public function mostrarFormulario()
    {
        return view('backend.admin-form.formulario');
    }

    public function guardarHorarios(Request $request)
    {
        $fechaInicio = $request->input('fecha_inicio');
        $fechaFin = $request->input('fecha_fin');
        $horaInicio = $request->input('hora_inicio');
        $horaFin = $request->input('hora_fin');
        $intervalo = $request->input('intervalo');

        $fechas = $this->generarFechas($fechaInicio, $fechaFin);
        $horas = $this->generarHoras($horaInicio, $horaFin, $intervalo);

        foreach ($fechas as $fecha) {
            foreach ($horas as $hora) {
                Turno::create([
                    'fecha' => $fecha,
                    'hora' => $hora,
                ]);
            }
        }

        return "Turnos guardados correctamente.";
    }

    private function generarFechas($fechaInicio, $fechaFin)
    {
        $fechas = [];
        $inicio = Carbon::parse($fechaInicio);
        $fin = Carbon::parse($fechaFin);

        while ($inicio <= $fin) {
            if (!$inicio->isWeekend()) {
                $fechas[] = $inicio->toDateString();
            }
            $inicio->addDay();
        }

        return $fechas;
    }

    private function generarHoras($horaInicio, $horaFin, $intervalo)
    {
        $horas = [];
        $inicio = Carbon::createFromFormat('H:i', $horaInicio);
        $fin = Carbon::createFromFormat('H:i', $horaFin);


        while ($inicio <= $fin) {
            $horas[] = $inicio->format('H:i:s');
            $inicio->addMinutes($intervalo);
        }

        return $horas;
    }

        public function mostrarInscribirse()
        {
            $fechas = Turno::distinct('fecha')->pluck('fecha');
            $fechasConDia = [];

            foreach ($fechas as $fecha) {
                $diaSemana = Carbon::parse($fecha)->locale('es')->isoFormat('dddd');
                $fechasConDia[$fecha] = $fecha . ' (' . $diaSemana . ')';
            }

            $horas = [];

            foreach ($fechas as $fecha) {
                $horasFecha = Turno::where('fecha', $fecha)->pluck('hora');
                $horasDisponibles = Turno::where('fecha', $fecha)->whereNotIn('hora', Inscripcion::where('fecha', $fecha)->pluck('hora'))->pluck('hora');
                $horas[$fecha] = $horasDisponibles;
            }

            $carreras = Carrera::pluck('descripcion', 'id');

            return view('frontend.turnos.inscribirse', compact('fechasConDia', 'horas', 'carreras'));
        }


    /*public function mostrarInscribirse()
    {
        $fechas = Turno::distinct('fecha')->pluck('fecha');
        $horas = [];

        foreach ($fechas as $fecha) {
        $horasFecha = Turno::where('fecha', $fecha)->pluck('hora');
        $horas[$fecha] = $horasFecha;
        }

        $carreras = Carrera::pluck('descripcion', 'id');

        return view('frontend.turnos.inscribirse', compact('fechas', 'horas', 'carreras'));
    }
    */

        public function guardarTurno(Request $request)
    {
        $dni = $request->input('dni');

        $existingInscripcion = Inscripcion::where('dni', $dni)->first();

        if (!empty($existingInscripcion)) {
            Session::flash('error', 'Ya tienes una inscripción registrada. No puedes solicitar otra.');
            return redirect()->back()->withInput();
        }

        $fecha = $request->input('fecha');
        $hora = $request->input('hora');
        $dni = $request->input('dni');
        $descripcion = $request->input('carrera_id');


        $hash =  $request->input('dni') . $request->input('fecha') .$request->input('hora');


        Inscripcion::create([
            'fecha' => $fecha,
            'hora' => $hora,
            'dni' => $dni,
            'carrera_id' => $descripcion,
            'hash' => md5($hash)
        ]);

        // Actualizar las horas seleccionadas
        $horasSeleccionadas = Inscripcion::where('fecha', $fecha)->pluck('hora');

        return "Turno guardado correctamente.";
    }


}

