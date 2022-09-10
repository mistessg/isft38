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
use DB;

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
        $anios = Anio::pluck('descripcion', 'id');
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
        $profesores = Profesor::select("id", DB::raw("CONCAT(profesors.apellido,', ',profesors.nombre) as nombrecompleto"))
        ->pluck('nombrecompleto', 'id');
        $materias = Materia::where('carrera_id', $carrera->id)
                           ->where('anio_id', $anio->id)
                           ->pluck('descripcion', 'id');
        $modulo = Modulo::find($request->input('modulohorario_id'));
        $dia = $request->input('dia');
        $modulosHorario = Modulo::select("id", DB::raw("CONCAT(modulos.horainicio,' ',modulos.horafin) as horariocompleto"))
        ->pluck('horariocompleto', 'id');
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
            'profesores',
            'modulo',
            'dia'
        ));
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
            [ 'sede_id' => 'required',
            'carrera_id' => 'required',
            'anio_id' => 'required',
            'comision_id' => 'required',
            'materia_id' => 'required',
            'profesor_id' => 'required',
            'dia' => 'required',
            'modulohorario_id' => 'required' ]
         );

      $horario = Horario::where('sede_id', $request->input('sede_id'))
        ->where('carrera_id', $request->input('carrera_id'))
        ->where('anio_id', $request->input('anio_id'))
        ->where('comision_id',$request->input('comision_id'))
        ->where('dia',$request->input('dia'))
        ->where('modulohorario_id',$request->input('modulohorario_id'))->first();
        
    if(empty($horario)){ $horario = new Horario(); }
     $horario->sede_id = $request->input('sede_id');
     $horario->carrera_id = $request->input('carrera_id');
     $horario->anio_id = $request->input('anio_id');
     $horario->comision_id = $request->input('comision_id');
     $horario->materia_id = $request->input('materia_id');
     $horario->profesor_id = $request->input('profesor_id');
     $horario->dia = $request->input('dia');
     $horario->modulohorario_id = $request->input('modulohorario_id');
     $horario->comentario = $request->input('comentario');
     $horario->save();
   //$request->session()->flash('status', 'Se guardó correctamente el horario '. $noticia->titulo);
    return redirect()->route('horario.search.carrera',['sede'=>$horario->sede_id, 'carrera'=>$horario->carrera_id, 'anio'=>$horario->anio_id, 'comision'=>$horario->comision_id]); 
         
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $validatedData = $request->validate(
            [ 'sede_id' => 'required',
            'carrera_id' => 'required',
            'anio_id' => 'required',
            'comision_id' => 'required',
             ]
         );
        return redirect()->route('horario.search.carrera',['sede'=>$request->input('sede_id'), 'carrera'=>$request->input('carrera_id'), 'anio'=>$request->input('anio_id'), 'comision'=>$request->input('comision_id')]); 
    }

    public function searchCarrera($sede,$carrera,$anio,$comision)
    {
        $sede = Sede::find($sede);
        $sedes = Sede::pluck('descripcion', 'id');
        $dias = array();
        $dias[1] = 'Lunes';
        $dias[2] = 'Martes';
        $dias[3] = 'Miércoles';
        $dias[4] = 'Jueves';
        $dias[5] = 'Viernes'; 
        $dias[6] = 'Sábado';
        $carrera = Carrera::find($carrera);
        $anio = Anio::find($anio);
        $modulosHorarios = Modulo::all()->sortBy('horainicio');
        $comision = Comision::find($comision);
 
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
    public function show($id)
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
        $horario = Horario::findOrFail($id);
        $sede = $horario->sede_id;
        $carrera = $horario->carrera_id;
        $anio = $horario->anio_id;
        $comision = $horario->comision_id;
        $horario->delete();
        return redirect()->route('horario.search.carrera',['sede'=>$sede, 'carrera'=>$carrera, 'anio'=>$anio, 'comision'=>$comision]); 
    }
}
