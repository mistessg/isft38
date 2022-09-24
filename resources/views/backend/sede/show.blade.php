@extends('backend.layouts.main')
@section('title', 'Sedes')
@section('content')
  <h1>Sede</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
   {{ Form::model($sede, [ 'method' => 'get' , 'route' => ['sede.show', $sede->id]]) }}
   <div class="form-group">
          {{ Form::label("descripcion", 'Descripción', ['class' => 'control-label']) }}
          {{Form::text("descripcion", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese la descripción", ])}}     
          @error('descripcion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          {{ Form::label("calle", 'Calle', ['class' => 'control-label']) }}
          {{Form::text("calle", old("calle"), ["class" => "form-control", "placeholder" => "Ingrese la calle", ])}}     
          @error('calle')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror         
    </div>
    <div class="form-group">
          {{ Form::label("numero", "Número", ['class' => 'control-label']) }}
          {{Form::number("numero", old("numero"), ["class" => "form-control", "placeholder" => "Ingrese el número", ])}}     
          @error('numero')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                  
    </div>
    <div class="form-group">
          {{ Form::label("ciudad", "Ciudad", ['class' => 'control-label']) }}
          {{Form::text("ciudad", old("ciudad"), ["class" => "form-control", "placeholder" => "Ingrese la ciudad", ])}}     
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