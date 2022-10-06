@extends('backend.layouts.main')
@section('title', 'Módulo horario')
@section('content')

<div class="Inicio">
  <h1 class="TextoInicio">Editar módulo</h1>
</div>

<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>

<div class="links">
    {{ Form::model($modulo, [ 'method' => 'put' , 'route' => ['modulo.update', $modulo->id],  'files' => true]) }}

    @csrf
    <!-- {{ csrf_field() }} -->

    <div class="form-group">
            {{ Form::label("horainicio", 'Hora de inicio', ['class' => 'control-label']) }}
            {{ Form::text("horainicio", old("horainicio"), ["class" => "form-control", "placeholder" => "", 
    ])}}
    </div>
    @error('horainicio')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <div class="form-group">
            {{ Form::label("horafin", 'Hora de finalización', ['class' => 'control-label']) }}
            {{ Form::text("horafin", old("horafin"), ["class" => "form-control", "placeholder" => "", 
    ])}}
    </div>
    @error('horafin')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <div class="form-group">
            {{ Form::label("duracion", 'Duración en minutos', ['class' => 'control-label', 'maxlength' => 60]) }}
            {{ Form::number("duracion", old("duracion"), ["class" => "form-control", "placeholder" => "", 
    ])}}
    </div>
    @error('duracion')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    </br>
    <button type="submit" class="btn btn-success form-control">Guardar cambios</button>
</div>


</div>
{!!Form::close()!!}
@endsection