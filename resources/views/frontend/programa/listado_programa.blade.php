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

        {{ Form::open(['route' => 'programa.store']) }}
        @csrf  
        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Periodo</label>
        <select class="form-select" id="carrera">
        <option value="" selected>Seleccione un periodo</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        </select>
        </div>

        <div class="input-group mb-3">
        {{ Form::label("sede_id", 'Sede', ['class' => 'input-group-text']) }}
        {{Form::select("sede_id", $sedes, null, ["class" => "form-select", "placeholder" => "Seleccione una sede"]) }}           
          @error('sede')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror 

        <!--<label class="input-group-text" for="inputGroupSelect01">Sede</label>
        <select class="form-select" id="sede">
        <option value="" selected>Seleccione una sede </option>
        <option value="sede_sn">Sede Central San Nicolas</option>
        </select>-->
        </div>

        <div class="input-group mb-3">
        <div class="input-group mb-3">
        {{ Form::label("carrera_id", 'Carrera', ['class' => 'input-group-text']) }}
        {{Form::select("carrera_id", $carreras, null, ["class" => "form-select", "placeholder" => "Seleccione una carrera"]) }}           
          @error('carrera')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror 

        <!--<label class="input-group-text" for="inputGroupSelect01">Carrera</label>
        <select class="form-select" id="carrera">
        <option value="" selected>Seleccione una carrera</option>
        <option value="logistica">Tecnicatura Superior en Logistica</option>
        <option value="gestion_ambiental">Tecnicatura Superior en Gestion Ambiental y Salud</option>
        <option value="mantenimiento_ambiental">Tecnicatura Superior en Mantenimiento Industrial</option>
        <option value="recursos_humanos">Tecnicatura Superior en Administracion de Recursos Humanos</option>
        <option value="admin_contable">Tecnicatura Superior en Administracion Contable</option>
        <option value="higiene_seguridad">Tecnicatura Superior en Higiene y Seguridad en el Trabajo</option>
        <option value="laboratorio">Tecnicatura Superior en Laboratorio de Analisis Clinicos</option>
        <option value="sistemas">Tecnicatura Superior en Analisis en Sistemas</option>
        </select>-->
        </div>

        <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Año/Comision</label>
        </div>


    
        <div class="d-grid gap-2">
        <button class="btn btn-outline-dark" type="submit" aria-label="consultar">Consultar</button>
        </div>
          
    </div>

    @endsection