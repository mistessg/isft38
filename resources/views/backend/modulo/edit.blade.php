@extends('backend.layouts.main')
@section('title', 'Módulo horario')
@section('content')
<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>
<div class="links">



    {{ Form::model($modulo, [ 'method' => 'put' , 'route' => ['modulo.update', $modulo->id],  'files' => true]) }}

    @csrf
    <!-- {{ csrf_field() }} -->

    <div class="form-group row">
        <div class="col-sm-10">
            {{ Form::label("horainicio", 'Hora de inicio', ['class' => 'control-label']) }}
            {{ Form::text("horainicio", old("horainicio"), ["class" => "form-control", "placeholder" => "", 
    ])}}
        </div>
    </div>
    @error('horainicio')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <div class="form-group row">
        <div class="col-sm-10">
            {{ Form::label("horafin", 'Hora de finalización', ['class' => 'control-label']) }}
            {{ Form::text("horafin", old("horafin"), ["class" => "form-control", "placeholder" => "", 
    ])}}
        </div>
    </div>
    @error('horafin')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <div class="form-group row">
        <div class="col-sm-10">
            {{ Form::label("duracion", 'Duración en minutos', ['class' => 'control-label', 'maxlength' => 60]) }}
            {{ Form::number("duracion", old("duracion"), ["class" => "form-control", "placeholder" => "", 
    ])}}
        </div>
    </div>
    @error('duracion')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror

</div>

</br><button type="submit" style="width: 83%;" class="btn btn-primary">Guardar cambios</button>
</div>
{!!Form::close()!!}
@endsection