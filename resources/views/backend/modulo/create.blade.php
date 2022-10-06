@extends('backend.layouts.main')

@section('title', 'Módulo horario')

@section('content')

<div class="Inicio">
    <h1 class="TextoInicio">Crear módulo</h1>
</div>

<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>

<div class="links">
    {{ Form::open(['route' => 'modulo.store']) }}

    <div class="form-group">
        {{ Form::label("horainicio",'Hora de inicio', ['class' => 'control-label']) }}
        {{Form::time("horainicio", null , ["class" => "form-control"])}}
    </div>
    @error('horainicio')<div class="alert alert-danger">{{ $message }}</div>@enderror

    <div class="form-group">
        {{ Form::label("horafin",'Hora de finalización', ['class' => 'control-label']) }}
        {{Form::time("horafin", null , ["class" => "form-control" ])}}
    </div>
    @error('horafin')<div class="alert alert-danger">{{ $message }}</div>@enderror

    <div class="form-group">
        {{ Form::label("duracion",'Duración en minutos', ['class' => 'control-label']) }}
        {{Form::number("duracion", null , ["class" => "form-control", 'maxlength' => 60 ])}}
    </div>
    @error('duracion')<div class="alert alert-danger">{{ $message }}</div>@enderror

    </br><button type="submit" class="btn btn-success form-control">Agregar</button>
</div>
{!!Form::close()!!}
</div>
@endsection