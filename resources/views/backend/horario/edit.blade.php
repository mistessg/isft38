@extends('backend.layouts.main')
@section('title', 'Horarios')
@section('content')
  <h1>Editar Horario</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">

{{ Form::model($horarios, [ 'method' => 'put' , 'route' => ['horario.update', $horarios->id],  'files' => true]) }}

  @csrf <!-- {{ csrf_field() }} -->

  <div class="container my-4">
    <div class="card">
    <h5 class="card-header" style=" background-color: #181818; color: white;">Cargar horarios</h5>
    <div class="card-body">
    {{ Form::open(['route' => 'horario.store']) }}
    <div class="input-group mt-5 mb-3">
    <label class="input-group-text" for="#">Sede</label>
    {{Form::text("sede_id", $horarios->sede->descripcion , ["class" => "form-control"])}}
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="#">Carrera</label>
 
  {{Form::text("carrera_id",  $horarios->carrera->descripcion , ["class" => "form-control" ])}}
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="#">Año</label>
 
  {{Form::text("anio_id",  $horarios->anio->descripcion , ["class" => "form-control" ])}}

  </div>
  <div class="input-group mb-3">
  <label class="input-group-text" for="#">Comision</label>
 
  {{Form::text("comision_id",  $horarios->comision->comision , ["class" => "form-control" ])}}
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="#">Día</label>
  @if(empty($dia))
    {{Form::select("dia", $dias, null, ["class" => "form-control", "placeholder" => "Seleccione un día"]) }}   
  @else
 
    {{Form::text("dia", $dia , ["class" => "form-control" ])}}
  @endif 
  </div>   

  <div class="input-group mb-3">
  <label class="input-group-text" for="#">Horario</label>
  @if(empty($modulo))
  {{Form::select("modulohorario_id", $modulosHorarios, null, ["class" => "form-control", "placeholder" => "Seleccione un   horario"]) }}   
  @else
  {{Form::text("modulohorario_id", $horarios->moduloHorario->id , ["class" => "form-control" ])}}
  @endif         
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="#">Materia</label>
  {{Form::select("materia_id", $materias, null, ["class" => "form-control", "placeholder" => "Seleccione una materia"]) }}   
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="#">Profesor</label>
  {{Form::select("profesor_id", $profesores, null, ["class" => "form-control", "placeholder" => "Seleccione un  profesor"]) }}   
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