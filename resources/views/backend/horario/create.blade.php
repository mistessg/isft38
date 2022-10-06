@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')
<div class="Inicio">
    <h1 class="TextoInicio">Crear</h1>
</div>
<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>
<div class="links">
    {{ Form::open(['route' => 'horario.store']) }}

    <div class="form-group">
        {{ Form::label("sede_id",'Sede', ['class' => 'control-label']) }}
        {{Form::text("sede", $sede->descripcion , ["class" => "form-control", "readonly" ])}}
        {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}

    </div>

    <div class="form-group">
        {{ Form::label("carrera_id",'Carrera', ['class' => 'control-label']) }}
        {{Form::text("carrera", $carrera->descripcion , ["class" => "form-control", "readonly" ])}}
        {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}

    </div>

    <div class="form-group">
        {{ Form::label("anio_id",'Año', ['class' => 'control-label']) }}
        {{Form::text("anio", $anio->descripcion , ["class" => "form-control", "readonly" ])}}
        {{Form::text("anio_id", $anio->id , ["class" => "form-control", "hidden" ])}}

    </div>
    <div class="form-group">
        {{ Form::label("comision_id",'Comisión', ['class' => 'control-label']) }}
        {{Form::text("comision", $comision->comision , ["class" => "form-control", "readonly" ])}}
        {{Form::text("comision_id", $comision->id , ["class" => "form-control", "hidden" ])}}

    </div>
    <div class="form-group">
        {{ Form::label("dia",'Día', ['class' => 'control-label']) }}
        @if(empty($dia))
        {{Form::select("dia", $dias, null, ["class" => "form-control", "placeholder" => "Seleccione un día"]) }}
        @else
        {{Form::text("dia_nombre", $dias[$dia] , ["class" => "form-control", "readonly" ])}}
        {{Form::text("dia", $dia , ["class" => "form-control", "hidden" ])}}
        @endif

    </div>
    <div class="form-group">
        {{ Form::label("modulohorario_id",'Módulo', ['class' => 'control-label']) }}
        @if(empty($modulo))
        {{Form::select("modulohorario_id", $modulosHorario, null, ["class" => "form-control", "placeholder" => "Seleccione un horario"]) }}
        @else
        {{Form::text("modulohorario", $modulo->horainicio . ' - ' . $modulo->horafin , ["class" => "form-control", "readonly" ])}}
        {{Form::text("modulohorario_id", $modulo->id , ["class" => "form-control", "hidden" ])}}
        @endif
    </div>
    <div class="form-group">
        {{ Form::label("materia_id",'Materia', ['class' => 'control-label']) }}
        {{Form::select("materia_id", $materias, null, ["class" => "form-control", "placeholder" => "Seleccione una materia"]) }}
        @error('materia_id')<div class="alert alert-danger">{{ $message }}</div>@enderror

    </div>
    <div class="form-group">
        {{ Form::label("profesor_id",'Profesor', ['class' => 'control-label']) }}
        {{Form::select("profesor_id", $profesores, null, ["class" => "form-control", "placeholder" => "Seleccione un profesor"]) }}
        @error('profesor_id')<div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        {{ Form::label("comentario",'Comentario', ['class' => 'control-label']) }}
        {{Form::text("comentario", null , ["class" => "form-control" ])}}
    </div>
    </br><button type="submit" class="btn btn-success form-control">Agregar</button>
</div>
{!!Form::close()!!}
</div>
@endsection