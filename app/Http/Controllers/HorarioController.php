<?php

namespace App\Http\Controllers;

use App\Models\Anio;
use App\Models\Profesor;
use App\Models\Carrera;
use App\Models\Sede;
use App\Models\Materia;
use App\Models\Comision;
use App\Models\Horario;
use App\Models\Modulo;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        return view('frontend.horarios.tablaCarreras');
    }*/
    public function index()
    {
        $carreras = Carrera::pluck('descripcion', 'id');
        $anios = Anio::pluck('anio', 'id');
        $comisions = Comision::pluck('comision', 'id');
        $sedes = Sede::pluck('descripcion', 'id');
        return view('backend.horario.index', compact('carreras', 'anios', 'comisions', 'sedes'));
    }
    public function porProfesor()
    {
        return view('frontend.horarios.porProfesor');
    }
    public function porCarrera()
    {
        return view('frontend\horarios\porCarerra');
    }
    public function porDiaHora()
    {
        return view('frontend\horarios\porDiaHora');
    }
    public function create(Request $request)
    {
    }
    public function createHorario(Request $request)
    {  
        $sede = Sede::find($request->input('sede_id'));
        $sedes = Sede::pluck('descripcion', 'id');

        $carreras = Carrera::pluck('descripcion', 'id');
        $anios = Anio::pluck('anio', 'id');
        $comisions = Comision::pluck('comision', 'id');

        $carrera = Carrera::find($request->input('carrera_id'));
        $anio = Anio::find($request->input('anio_id'));
        $profesores = Profesor::pluck('apellido','id');
        //$materias = Materia::pluck('descripcion', 'id');
        $materias = Materia::where('carrera_id', $carrera->id)
                           ->where('anio_id', $anio->id)
                           ->pluck('descripcion', 'id');
 
        $modulosHorario = Modulo::pluck('horainicio', 'id');
        $comision = Comision::find($request->input('comision_id'));
        $dias = array();
        $dias[1] = 'Lunes';
        $dias[2] = 'Martes';
        $dias[3] = 'Miércoles';
        $dias[4] = 'Jueves';
        $dias[5] = 'Viernes'; 
        $dias[6] = 'Sábado';
        $horarios = Horario::where('sede_id', $sede->id)
            ->where('carrera_id', $carrera->id)
            ->where('anio_id', $anio->id)
         ->where('comision_id',$comision->id)->get();
       
         return view('backend.horario.create', compact(
            'sede',
            'carrera',
            'carreras',
            'sedes',
            'horarios',
            'anio',            
            'materias',
            'dias',
            'modulosHorario',
            'comision',
            'profesores'
            //'comentario',
           // 'dias'
        ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [ 'materia_id' => 'required',
              'profesor_id' => 'required',
              'dia' => 'required',
              'modulohorario_id' => 'required' ]
         );

     $horario = new Horario(); 
     $horario->sede_id = $request->input('sede_id');
     $horario->carrera_id = $request->input('carrera_id');
     $horario->duracion = 60;
    // $horario->cometario = '-';
     $horario->save();
   //$request->session()->flash('status', 'Se guardó correctamente la noticia '. $noticia->titulo);
    return redirect()->route('horario.index'); 
    
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $sede = Sede::find($request->input('sede_id'));
        $sedes = Sede::pluck('descripcion', 'id');
        $dias = array();
        $dias[1] = 'Lunes';
        $dias[2] = 'Martes';
        $dias[3] = 'Miércoles';
        $dias[4] = 'Jueves';
        $dias[5] = 'Viernes'; 
        $dias[6] = 'Sábado';
        $carrera = Carrera::find($request->input('carrera_id'));
        $anio = Anio::find($request->input('anio_id'));
        $profesor = Profesor::find($request->input('profesor_id'));
        $materia = Materia::find($request->input('materia_id'));
        $dia = Horario::find($request->input('dia'));
        $moduloHorario = Modulo::find($request->input('moduloHorario_id'));
        $modulosHorarios = Modulo::all();
        $comision = Comision::find($request->input('comision_id'));
 
        $comentario = Horario::find($request->input('comentario'));

        $horarios = Horario::where('sede_id', $sede->id)
            ->where('carrera_id', $carrera->id)
            ->where('anio_id', $anio->id)
         ->where('comision_id',$comision->id)->get();


        return view('backend.horario.show', compact(
            'sede',
            'carrera',
            'sedes',
            'horarios',
            'anio',
            'profesor',
            'materia',
            'dia',
            'moduloHorario',
            'comentario',
            'dias',
            'comision',
            'modulosHorarios'
        ));
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $horarios = Horario::all();
        // return view('backend.horario.show', compact('horarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horarios = Horario::findOrFail($id);
        return view('backend.horario.edit', compact('horarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $horario, $id)
    {
        $horarios = Horario::findOrFail($id);
        $validateData = $request->validate(
            [
                'sede_id' => ['required'],
                'carrera_id' => ['required'],
                'anio_id' => ['required'],
                'profesor_id' => ['required'],
                'materia_id' => ['required'],
                'comision_id' => ['required'],
                'dia' => ['required'],
                'modulohorario_id' => ['required'],
                'duracion' => ['required']
            ]
        );

        $horarios->save();
        $request->session()->flash('status', 'Se modificó correctamente el horario');
        return redirect()->route('backend.horario.edit', $horarios->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horarios = Horario::findOrFail($id);
        $horarios->delete();
        $horarios->save();
        $horarios->session()->flash('status', 'Se eliminó correctamente el horario');
        return redirect()->route('backend.horario.index', $horarios->$id);
    }
}
