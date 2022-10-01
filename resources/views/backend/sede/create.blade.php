@extends('backend.layouts.main')
@section('title', 'Sedes')

@section('content')

<div class="Inicio">
    <h1 class="TextoInicio">Nueva Sede</h1>
</div>
<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>
<div class="links">
    {{ Form::open(['route' => 'sede.store', 'files' => true]) }}
    @csrf
    <!-- {{ csrf_field() }} -->
    <div class="form-group">
        {{ Form::label("descripcion", 'Descripción', ['class' => 'control-label']) }}
        {{Form::text("descripcion", old("descripcion"), ["class" => "form-control", "placeholder" => "", ])}}
        @error('descripcion')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label("calle", 'Calle', ['class' => 'control-label']) }}
        {{Form::text("calle", old("calle"), ["class" => "form-control", "placeholder" => "", ])}}
        @error('calle')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label("numero", "Número", ['class' => 'control-label']) }}
        {{Form::number("numero", old("numero"), ["class" => "form-control", "placeholder" => "", ])}}
        @error('numero')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        {{ Form::label("ciudad", "Ciudad", ['class' => 'control-label']) }}
        {{Form::text("ciudad", old("ciudad"), ["class" => "form-control", "placeholder" => "", ])}}
        @error('ciudad')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group @if($errors->has('imagen')) has-error has-feedback @endif">
        {{ Form::label("sedeimagen", "Imagen", ['class' => 'control-label']) }} 
        {{ Form::file("sedeimagen" , ["class" => "form-control" ])}}
        @error('sedeimagen')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    </br>
    <button type="submit" class="btn btn-success btn-block container-fluid p-3">{{__('Guardar')}}</button>
</div>
{!!Form::close()!!}
@endsection