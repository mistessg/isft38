@extends('backend.layouts.main')
@section('title', 'Materias')
@section('content')
  <h1>Nueva Materia</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
 {{ Form::open(['route' => 'materias.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group">
          {{ Form::label("materia", 'Materia', ['class' => 'control-label']) }}
          {{Form::text("materia", old("materia"), ["class" => "form-control", "placeholder" => "Ingrese la Materia", ])}}                        
          @error('materia')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          {{ Form::label("carrera_id", __('noticias.carrera'), ['class' => 'control-label']) }}
          {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera"]) }}           
          @error('carrera_id')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
    </div>     
    <div class="form-group">
          {{ Form::label("anio", 'Año', ['class' => 'control-label']) }}
          {{Form::select("anio", $anio, '1', ["class" => "form-control", "placeholder" => "Seleccione un año"]) }}                       
          @error('anio')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>     
    <div class="form-group">
          {{ Form::label("contenidos", 'Programa', ['class' => 'control-label']) }}
           {{ Form::file("contenidos") }}                  
          @error('contenidos')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>       
    </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button></div>
{!!Form::close()!!}
@endsection