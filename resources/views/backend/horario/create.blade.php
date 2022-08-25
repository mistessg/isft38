@extends('backend.layouts.main')
@section('title', 'Horarios')
@section('content')
  <h1>Horarios :: {{$carreras->carrera}} :: {{$anio}}° año</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
 {{ Form::open(['route' => 'horarios.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
           <div class="form-group">
 
          {{Form::text("carrera_id", $carreras->id, ["class" => "form-control", "hidden" ]) }}                       
          @error('materia')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>  
    <div class="form-group">
          {{ Form::label("modulo", 'Módulo', ['class' => 'control-label']) }}
          {{Form::select("modulo", $modulos, $modulo, ["class" => "form-control", "placeholder" => "Seleccione un módulo", "readonly"] ) }}                       
          @error('modulo')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>      
    <div class="form-group">
          {{ Form::label("dia", 'Día', ['class' => 'control-label']) }}
          {{Form::select("dia", $dias, $dia, ["class" => "form-control", "placeholder" => "Seleccione un día", "readonly" ]) }}                       
          @error('dia')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>   

    <div class="form-group">
          {{ Form::label("materia_id", 'Materia', ['class' => 'control-label']) }}
          {{Form::select("materia_id", $materias, null, ["class" => "form-control", "placeholder" => "Seleccione una materia" ]) }}                       
          @error('materia')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>      
    <div class="form-group">
          {{ Form::label("user_id", 'Profesor', ['class' => 'control-label']) }}
          {{Form::select("user_id", $users, null, ["class" => "form-control", "placeholder" => "Seleccione un profesor"  ]) }}                       
          @error('user_id')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>     
    <div class="form-group">
          {{ Form::label("comentarios", 'Comentarios', ['class' => 'control-label']) }}
          {{Form::text("comentarios", old("comentarios"), ["class" => "form-control", "placeholder" => "", ])}}                        
          @error('comentarios')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>    </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button></div>
{!!Form::close()!!}
@endsection