@extends('backend.layouts.main')
@section('title', 'Carreras')
@section('content')

{{ Form::open(['route' => 'horario.store']) }}
        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Sede</label>
        {{Form::text("sede", $sede->descripcion , ["class" => "form-control", "readonly" ])}}   
        {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}                        
 
    </div>

    <div class="input-group mb-3">
        <label class="input-group-text" for="#">Carrera</label>
        {{Form::text("carrera", $carrera->descripcion , ["class" => "form-control", "readonly" ])}}   
        {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}                        
 
    </div>

        
        </br><button type="submit" style="width: 100%;" class="btn btn-primary">Consultar</button></div>
         {!!Form::close()!!}  
@endsection