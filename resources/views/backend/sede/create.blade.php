@extends('backend.layouts.main')
@section('title', 'Sedes')

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
    <h1 class="TextoInicio">Nueva Sede</h1>
  </div>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links" >
 {{ Form::open(['route' => 'sede.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
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
    <div class="form-group @if($errors->has('imagen')) has-error has-feedback @endif" style="text-align:center;">
           {{ Form::label("sedeimagen", "Imagen", ['class' => 'control-label']) }}
           <br>
           {{ Form::file("sedeimagen") }}
          @error('sedeimage')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    </br>
    <button type="submit"  class="btn btn-success btn-block container-fluid p-3">{{__('Guardar')}}</button>
</div>
{!!Form::close()!!}
@endsection