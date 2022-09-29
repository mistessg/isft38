@extends('backend.layouts.main')
@section('title', 'Materia')

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
    .form-group{
        margin-top:10px;
    }
    .form-group label{
        outline: none;
        margin-bottom: 5px;
        font-family: 'Quicksand', sans-serif;
        font-weight: 800;
        font-size: 20px;
    }
    .form-control{
        border: 1px solid gray;
        padding:10px;
        outline: none;
    }
  </style>
  <div class="Inicio">
    <h1 class="TextoInicio">Nueva Materia</h1>
  </div>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links" >
 {{ Form::open(['route' => 'materia.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
  <div class="form-group">
          {{ Form::label("descripcion", __('Nombre de la materia'), ['class' => 'control-label']) }}
          {{Form::text("descripcion", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese la descripción", ])}}     
          @error('descripcion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        {{ Form::label("carrera", __('Carrera'), ['class' => 'control-label']) }}                 
            {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera"]) }}   

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">   
        {{ Form::label("anio", __('Año'), ['class' => 'control-label']) }}              
            {{Form::select("anio_id", $anios, null, ["class" => "form-control", "placeholder" => "Seleccione un año"]) }}   
        </div>
    </div>
 </br> <button type="submit"  class="btn btn-success btn-block container-fluid p-3">{{__('Guardar')}}</button>  
</div>
{!!Form::close()!!}
@endsection