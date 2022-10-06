@extends('backend.layouts.main')
@section('title', 'Editar Comision')
@section('content')

<style>
    .Inicio {
        text-align: center;
        margin: 20px;
        font-family: 'Quicksand', sans-serif;
        font-weight: 800;
        position: relative;
    }
</style>

<div class="Inicio">
<div style="position:absolute;top:0;left:30px;cursor:pointer;">
        <a href="/comision">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
        </a>
    </div>
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