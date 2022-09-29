@extends('backend.layouts.main')
@section('title', 'Materias')
@section('content')
  <h1>Editar Materia</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
{{ Form::model($materias, [ 'method' => 'put' , 'route' => ['materia.update', $materias->id],  'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group @if($errors->has('titulo')) has-error has-feedback @endif">
          {{ Form::label("descripcion", 'descripcion', ['class' => 'control-label']) }}
          {{Form::text("descripcion", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese la materia", ])}}                        
          @error('descripcion') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>
 </br> <button type="submit"  class="btn btn-success btn-block container-fluid p-3">{{__('Guardar')}}</button>  
    </div>
{!!Form::close()!!}
@endsection