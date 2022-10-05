@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')
<div class="Inicio">
  <h1 class="TextoInicio">Cargar horarios</h1>
</div>
<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>

<div class="links">
      {{ Form::open(['route' => 'horario.search']) }}
      <div class="form-group">
        {{ Form::label("sede_id",'Sede', ['class' => 'control-label']) }}
        {{Form::select("sede_id", $sedes, null, ["class" => "form-control", "placeholder" => "Seleccione la sede" ]) }}
        @error('sede_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        {{ Form::label("carrera",'Carrera', ['class' => 'control-label']) }}
        {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera" ]) }}
        @error('carrera_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        {{ Form::label("año", 'Anio', ['class' => 'control-label']) }}
        {{Form::select("anio_id", $anios, null, ["class" => "form-control", "placeholder" => "Seleccione el año" ]) }}
        @error('anio_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
       {{ Form::label("comision",'Comision', ['class' => 'control-label']) }}
        {{Form::select("comision_id", $comisions, null, ["class" => "form-control", "placeholder" => "Seleccione la comision" ]) }}
        @error('comision_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      </br><button type="submit" class="btn btn-success form-control">Consultar</button>
    </div>
    {!!Form::close()!!}
  </div>

  @endsection