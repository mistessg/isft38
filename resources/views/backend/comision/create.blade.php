@extends('backend.layouts.main')
@section('title', 'Crear Comisión')
@section('content')


<div class="Inicio">
  <h1 class="TextoInicio">Nueva comision</h1>
</div>

<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>
<div class="links">
    {{ Form::open(['route' => 'comision.store', 'files' => true]) }}
    @csrf
    <!-- {{ csrf_field() }} -->
    <div class="form-group @if($errors->has('titulo')) has-error has-feedback @endif">
        {{ Form::label("comision", 'Comision', ['class' => 'control-label']) }}
        {{Form::text("comision", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese la nueva comisión", ])}}
    </div>
    @error('descripcion')<div class="alert alert-danger">{{ $message }}</div>@enderror
    
    </br><button type="submit" class="btn btn-success form-control">Agregar</button>
    {!!Form::close()!!}
</div>


@endsection