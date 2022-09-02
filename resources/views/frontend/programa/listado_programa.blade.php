@extends('backend.layouts.main')

@section('title', 'Listado de materias')

@section('content')

{{-- @foreach($leagues as $programa)
{{$programa}}
@endforeach --}}
<div class="container my-4">
    
        <div class="card">
        <h5 class="card-header" style=" background-color: #181818; color: white;">Consulte su programa</h5>
        <div class="card-body">

        {{ Form::open(['route' => 'programa.search']) }}
        @csrf  

      <div class="input-group mb-3">
        {{ Form::label("anio_id", 'Periodo', ['class' => 'input-group-text']) }}
        {{Form::select("anio_id", $anios, null, ["class" => "form-select", "placeholder" => "Seleccione un periodo"]) }}           
          @error('año')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
      </div>
        
      <div class="input-group mb-3">
        {{ Form::label("sede_id", 'Sede', ['class' => 'input-group-text']) }}
        {{Form::select("sede_id", $sedes, null, ["class" => "form-select", "placeholder" => "Seleccione una sede"]) }}           
          @error('sede')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
        </div>

      
      <div class="input-group mb-3">
        {{ Form::label("carrera_id", 'Carrera', ['class' => 'input-group-text']) }}
        {{Form::select("carrera_id", $carreras, null, ["class" => "form-select", "placeholder" => "Seleccione una carrera"]) }}           
          @error('carrera')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror 
        
      </div>

        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Año/Comision</label>
        </div>


    
        <div class="d-grid gap-2">
        <button class="btn btn-outline-dark" type="submit" aria-label="consultar">Consultar</button>
        </div>
          
    </div>

    @endsection