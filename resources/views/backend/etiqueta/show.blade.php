@extends('backend.layouts.blog')
@section('title', 'Etiquetas')
@section('content')
  <h1>Etiqueta</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
   {{ Form::model($etiqueta, [ 'method' => 'get' , 'route' => ['etiquetas.show', $etiqueta->id]]) }}
    <div class="form-group @if($errors->has('nombre')) has-error has-feedback @endif">
          {{ Form::label("nombre", 'Nombre', ['class' => 'control-label']) }}
          {{Form::text("nombre", null , ["class" => "form-control", "readonly" ])}}                        
    </div>
    <div class="form-group @if($errors->has('descripcion')) has-error has-feedback @endif">
          {{ Form::label("descripcion", "Descripción", ['class' => 'control-label']) }}
          {{Form::text("descripcion", null , ["class" => "form-control", "readonly" ])}}                        
    </div>    
{!!Form::close()!!}
@endsection