@extends('backend.layouts.main')
@section('title', 'Sedes')
@section('content')
<div class="Inicio">
    <h1 class="TextoInicio">Sede</h1>
  </div>
  <div>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
   {{ Form::model($sede, [ 'method' => 'get' , 'route' => ['sede.show', $sede->id]]) }}
   <div class="form-group">
          {{ Form::label("descripcion", 'Descripción', ['class' => 'control-label']) }}
          {{Form::text("descripcion", old("descripcion"), ["class" => "form-control", "readonly" => "readonly", ])}}     
    </div>
    <div class="form-group">
          {{ Form::label("calle", 'Calle', ['class' => 'control-label']) }}
          {{Form::text("calle", old("calle"), ["class" => "form-control", "readonly" => "readonly", ])}}     
          @error('calle')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror         
    </div>
    <div class="form-group">
          {{ Form::label("numero", "Número", ['class' => 'control-label']) }}
          {{Form::number("numero", old("numero"), ["class" => "form-control", "readonly" => "readonly",])}}     
          @error('numero')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                  
    </div>
    <div class="form-group">
          {{ Form::label("ciudad", "Ciudad", ['class' => 'control-label']) }}
          {{Form::text("ciudad", old("ciudad"), ["class" => "form-control", "readonly" => "readonly", ])}}     
          @error('ciudad')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <div class="form-group @if($errors->has('imagen')) has-error has-feedback @endif">
    {{ Form::label("sedeimagen", "Imagen", ['class' => 'control-label']) }}
      <img src="{{ asset('./storage/'. $sede->sedeimagen) }}" class="img-fluid img-thumbnail" alt="...">            
    </div>
   {!!Form::close()!!}
@endsection