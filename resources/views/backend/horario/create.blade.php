@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')

{{ Form::open(['route' => 'horario.store']) }}
    <div class="container my-4">
    
        <div class="card">
        <h5 class="card-header" style=" background-color: #181818; color: white;">Cargar horarios</h5>
        <div class="card-body">
        {{ Form::open(['route' => 'horario.store']) }}
        <div class="input-group mt-5 mb-3">
    <label class="input-group-text" for="#">Sede</label>
    {{Form::text("sede", $sede->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}

</div>

<div class="input-group mb-3">
    <label class="input-group-text" for="#">Carrera</label>
    {{Form::text("carrera", $carrera->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}

</div>
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Año</label>
    {{Form::text("anio", $anio->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("anio_id", $anio->id , ["class" => "form-control", "hidden" ])}}

</div>
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Comision</label>
    {{Form::text("comision", $comision->comision , ["class" => "form-control", "readonly" ])}}
    {{Form::text("comision_id", $comision->id , ["class" => "form-control", "hidden" ])}}
</div>
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Día</label>
    @if(empty($dia))
      {{Form::select("dia", $dias, null, ["class" => "form-control", "placeholder" => "Seleccione un día"]) }}   
    @else
      {{Form::text("dia_nombre", $dias[$dia] , ["class" => "form-control", "readonly" ])}}
      {{Form::text("dia", $dia , ["class" => "form-control", "hidden" ])}}
    @endif 
</div>   
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Horario</label>
    @if(empty($modulo))
    {{Form::select("modulohorario_id", $modulosHorario, null, ["class" => "form-control", "placeholder" => "Seleccione un horario"]) }}   
    @else
    {{Form::text("modulohorario", $modulo->horainicio . ' - ' . $modulo->horafin , ["class" => "form-control", "readonly" ])}}
    {{Form::text("modulohorario_id", $modulo->id , ["class" => "form-control", "hidden" ])}}
   @endif         
</div>
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Materia</label>
    {{Form::select("materia_id", $materias, null, ["class" => "form-control", "placeholder" => "Seleccione una materia"]) }}   
    @error('materia_id')<div class="alert alert-danger">{{ $message }}</div>@enderror  

</div>
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Profesor</label>
    {{Form::select("profesor_id", $profesores, null, ["class" => "form-control", "placeholder" => "Seleccione un profesor"]) }}   
    @error('profesor_id')<div class="alert alert-danger">{{ $message }}</div>@enderror  
</div>        
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Comentario</label>
    {{Form::text("comentario", null , ["class" => "form-control" ])}}
</div>   
        </br><button type="submit" style="width: 100%;" class="btn btn-primary">Agregar</button></div>
         {!!Form::close()!!}  
    </div> 
    {!!Form::close()!!}  
@endsection