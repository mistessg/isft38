@extends('backend.layouts.main')
@section('title', 'Carreras')

@section('content')
  <h1>Nueva Carrera</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
 {{ Form::open(['route' => 'carrera.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
  <div class="form-group">
          {{ Form::label("descripcion", __('carrera.descripcion'), ['class' => 'control-label']) }}
          {{Form::text("descripcion", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese la descripcion", ])}}     
          @error('descripcion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <div class="form-group">
          {{ Form::label("anios", __('carrera.anios'), ['class' => 'control-label']) }}
          {{Form::text("anios", old("anios"), ["class" => "form-control", "placeholder" => "Ingrese años", ])}}     
          @error('anios')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <div class="form-group">
          {{ Form::label("resolucion", __('carrera.resolucion'), ['class' => 'control-label']) }}
          {{Form::text("resolucion", old("resolucion"), ["class" => "form-control", "placeholder" => "Ingrese la resolucion", ])}}     
          @error('resolucion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <div class="form-group">
          {{ Form::label("texto", __('carrera.texto'), ['class' => 'control-label']) }}
          {{Form::textarea("texto", old("texto"), ["class" => "form-control", "placeholder" => "Ingrese texto", ])}}     
          @error('texto')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <div class="form-group">
          {{ Form::label("texto", __('carrera.nombre_carpeta'), ['class' => 'control-label']) }}
          {{Form::text("nombre_carpeta", old("nombre_carpeta"), ["class" => "form-control", "placeholder" => "Ingrese texto", ])}}     
          @error('nombre_carpeta')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <div class="form-group @if($errors->has('imagen')) has-error has-feedback @endif">
           {{ Form::label("imagen", __('carrera.imagen'), ['class' => 'control-label']) }}
           {{ Form::file("imagen") }}
          @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
</div>              
    </br><button type="submit" style="width: 60%;" class="btn btn-primary">{{__('carrera.guardar')}}</button></div>
{!!Form::close()!!}
@endsection