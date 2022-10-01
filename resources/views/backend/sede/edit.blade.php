@extends('backend.layouts.main')
@section('title', 'Sedes')
@section('content')
  <div class="Inicio">
    <h1 class="TextoInicio">Editar Sede</h1>
  </div>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
{{ Form::model($sede, [ 'method' => 'put' , 'route' => ['sede.update', $sede->id],  'files' => true]) }}
@csrf <!-- {{ csrf_field() }} -->
<div class="form-group">
          {{ Form::label("descripcion", 'Descripción', ['class' => 'control-label']) }}
          {{Form::text("descripcion", old("descripcion"), ["class" => "form-control" ])}}     
          @error('descripcion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          {{ Form::label("calle", 'Calle', ['class' => 'control-label']) }}
          {{Form::text("calle", old("calle"), ["class" => "form-control"])}}     
          @error('calle')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror         
    </div>
    <div class="form-group">
          {{ Form::label("numero", "Número", ['class' => 'control-label']) }}
          {{Form::number("numero", old("numero"), ["class" => "form-control" ])}}     
          @error('numero')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                  
    </div>
    <div class="form-group">
          {{ Form::label("ciudad", "Ciudad", ['class' => 'control-label']) }}
          {{Form::text("ciudad", old("ciudad"), ["class" => "form-control" ])}}     
          @error('ciudad')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <div class="form-group @if($errors->has('imagen')) has-error has-feedback @endif">
           {{ Form::label("sedeimagen", "Imagen", ['class' => 'control-label']) }}
           <br>
           {{ Form::file("sedeimagen", ['class' => 'control-label']) }}
          @error('sedeimagen')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
 </br>
 <button type="submit" class="btn btn-success form-control">Guardar</button></div>
</div>
{!!Form::close()!!}
@endsection