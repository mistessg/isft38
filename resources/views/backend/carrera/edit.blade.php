@extends('backend.layouts.main')
@section('title', 'Carreras')
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
    <h1 class="TextoInicio">Editar Carrera</h1>
  </div>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
{{ Form::model($carreras, [ 'method' => 'put' , 'route' => ['carrera.update', $carreras->id],  'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group @if($errors->has('titulo')) has-error has-feedback @endif">
          {{ Form::label("carrera", 'Carrera', ['class' => 'control-label']) }}
          {{Form::text("carrera", old("carrera"), ["class" => "form-control", "placeholder" => "Ingrese la Carrera", ])}}                        
          @error('carrera') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
          {{ Form::label("resolucion", 'Resolución', ['class' => 'control-label']) }}
          {{Form::text("resolucion", old("cresolucion"), ["class" => "form-control", "placeholder" => "Ingrese la Resolucion", ])}}                        
          @error('resolucion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>    
    <div class="form-group" style="text-align:center;">
          {{ Form::label("res_archivo", 'Resolución PDF', ['class' => 'control-label']) }}
          <br>
           {{ Form::file("res_archivo") }}          
          @error('res_archivo')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>     
 </br><button type="submit" style="width: 100%;" class="btn btn-success btn-block container-fluid p-3">Guardar</button>    
    </div>
{!!Form::close()!!}
@endsection