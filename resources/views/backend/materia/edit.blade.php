@extends('backend.layouts.main')
@section('title', 'Materias')
@section('content')
<style>
  .Inicio{
        text-align: center;
        margin:20px;
        font-family: 'Quicksand', sans-serif;
        font-weight: 800;
    }
    .links{
        padding:25px;
        width: 70%;
        margin: 0 auto;
    }
    .form-group label{
        outline: none;
        margin-bottom: 5px;
        font-family: 'Quicksand', sans-serif;
        font-weight: 800;
        font-size: 20px;
    }
</style>
<div class="Inicio">
  <h1>Editar Materia</h1>
</div>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
{{ Form::model($materias, [ 'method' => 'put' , 'route' => ['materia.update', $materias->id],  'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group @if($errors->has('titulo')) has-error has-feedback @endif">
      {{ Form::label("descripcion", __('Descripción'), ['class' => 'control-label']) }}
      {{Form::text("descripcion", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese la materia", ])}}                        
      @error('descripcion') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        {{ Form::label("carrera", __('Carrera'), ['class' => 'control-label']) }}                 
            {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera"]) }}   
            @error('carrera') <div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">   
        {{ Form::label("anio", __('Año'), ['class' => 'control-label']) }}              
            {{Form::select("anio_id", $anios, null, ["class" => "form-control", "placeholder" => "Seleccione un año"]) }}   
            @error('anio_id') <div class="alert alert-danger">{{ $message }}</div>@enderror
          </div>
    </div>
 </br> <button type="submit"  class="btn btn-success btn-block container-fluid p-3">{{__('Guardar')}}</button>  
    </div>
{!!Form::close()!!}
@endsection