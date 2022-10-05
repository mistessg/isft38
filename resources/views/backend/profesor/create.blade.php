@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')

<div class="Inicio">
  <h1 class="TextoInicio">Nuevo Profesor</h1>
</div>

<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>
<div class="links">
    {{ Form::open(['route' => 'profesor.store', 'files' => true]) }}
    @csrf
    <!-- {{ csrf_field() }} -->
    <div class="form-group @if($errors->has('titulo')) has-error has-feedback @endif">
        {{ Form::label("nombre", 'Nombre', ['class' => 'control-label']) }}
        {{Form::text("nombre", null , ["class" => "form-control" ])}}
    </div>
    @error('nombre')<div class="alert alert-danger">{{ $message }}</div>@enderror
    <div class="form-group @if($errors->has('titulo')) has-error has-feedback @endif">
        {{ Form::label("descripcion", 'Apellido', ['class' => 'control-label']) }}
        {{Form::text("apellido", null , ["class" => "form-control" ])}}
    </div>
    @error('apellido')<div class="alert alert-danger">{{ $message }}</div>@enderror
    </br><button type="submit" style="width: 100%;" class="btn btn-primary">Agregar</button>
    {!!Form::close()!!}
</div>
    @endsection