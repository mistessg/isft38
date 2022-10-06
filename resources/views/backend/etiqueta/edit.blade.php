@extends('backend.layouts.main')
@section('title', 'Etiquetas')
@section('content')
<div class="Inicio">
  <h1 class="TextoInicio">Editar Etiqueta</h1>
</div>
<div>
  @if(Session::has('status'))
  <div class="alert alert-success">{{ Session('status')}}</div>
  @endif
</div>
<div class="links">
  {{ Form::model($etiqueta, [ 'method' => 'put' , 'route' => ['etiquetas.update', $etiqueta->id],  'files' => true]) }}
  @csrf
  <!-- {{ csrf_field() }} -->
  <div class="form-group @if($errors->has('nombre')) has-error has-feedback @endif">
    {{ Form::label("nombre", 'Nombre', ['class' => 'control-label']) }}
    {{Form::text("nombre", old("nombre"), ["class" => "form-control", "placeholder" => "", ])}}
    @error('nombre') <div class="alert alert-danger">{{ $message }}</div>@enderror
  </div>
  <div class="form-group @if($errors->has('nombre')) has-error has-feedback @endif">
    {{ Form::label("descripcion", 'Descripción', ['class' => 'control-label']) }}
    {{Form::text("descripcion", old("descripcion"), ["class" => "form-control", "placeholder" => "", ])}}
    @error('nombre') <div class="alert alert-danger">{{ $message }}</div>@enderror
  </div>
  </br><button type="submit" class="btn btn-success form-control">{{__('noticias.guardar')}}</button>
</div>
{!!Form::close()!!}
@endsection