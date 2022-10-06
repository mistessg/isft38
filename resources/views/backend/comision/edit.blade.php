@extends('backend.layouts.main')
@section('title', 'Editar Comision')
@section('content')

<div class="Inicio">
  <h1 class="TextoInicio">Editar comisión</h1>
</div>

<div class="links">

    {{ Form::model($comision, [ 'method' => 'put' , 'route' => ['comision.update', $comision->id],  'files' => true]) }}

    @csrf
    <!-- {{ csrf_field() }} -->

    <div class="form-group row">
        <div class="col">
            {{ Form::label("comision", __('comisión'), ['class' => 'control-label']) }}
          {{Form::text("comision", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese años", ])}}     
          @error('comision')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror             
    <br>
    <button type="submit"  class="btn btn-success form-control">{{__('Guardar')}}</button>
        
</div>


{!!Form::close()!!}
@endsection