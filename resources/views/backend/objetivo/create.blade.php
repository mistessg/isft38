@extends('backend.layouts.main')
@section('title', 'Objetivo')
@section('content')
  <h1>Nueva Carrera</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
 {{ Form::open(['route' => 'carreras.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group">
          {{ Form::label("carrera", 'Carrera', ['class' => 'control-label']) }}
          {{Form::text("carrera", old("carrera"), ["class" => "form-control", "placeholder" => "Ingrese la Carrera", ])}}
          @error('carrera')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          {{ Form::label("resolucion", 'Resolución', ['class' => 'control-label']) }}
          {{Form::text("resolucion", old("resolucion"), ["class" => "form-control", "placeholder" => "Ingrese la Resolucion", ])}}
          @error('resolucion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          {{ Form::label("res_archivo", 'Resolución PDF', ['class' => 'control-label']) }}
           {{ Form::file("res_archivo") }}
          @error('res_archivo')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button></div>
{!!Form::close()!!}
@endsection
