@extends('backend.layouts.blog')
@section('title', 'Etiquetas')
@section('content')
  <h1>Editar Etiqueta</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
{{ Form::model($etiqueta, [ 'method' => 'put' , 'route' => ['etiquetas.update', $etiqueta->id],  'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group @if($errors->has('nombre')) has-error has-feedback @endif">
          {{ Form::label("nombre", 'Nombre', ['class' => 'control-label']) }}
          {{Form::text("nombre", old("nombre"), ["class" => "form-control", "placeholder" => "Ingrese el nombre de la Etiqueta", ])}}                        
          @error('nombre') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>
    <div class="form-group @if($errors->has('nombre')) has-error has-feedback @endif">
          {{ Form::label("descripcion", 'Descripción', ['class' => 'control-label']) }}
          {{Form::text("descripcion", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese la Descripción", ])}}                        
          @error('nombre') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>    
 </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button>    
    </div>
{!!Form::close()!!}
@endsection