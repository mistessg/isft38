@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')

    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-md">
        <a class="navbar-brand text-white" href="#">Cargar horarios</a>
      </div>
    </nav>

    <div class="container my-4">
    
        <div class="card">
        <h5 class="card-header" style=" background-color: #181818; color: white;">Horarios por Carrera</h5>
        <div class="card-body">

        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Sede</label>
        {{Form::select("sede", $sedes, null, ["class" => "form-control", "placeholder" => "Seleccione la sede" ]) }} 
        </div>

        <div class="input-group mb-3">
        {{Form::select("descripcion", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera" ]) }}    
        <!--
        <option value="logistica" selected>Tecnicatura Superior en Logistica</option>
        <option value="gestion_ambiental">Tecnicatura Superior en Gestion Ambiental y Salud</option>
        <option value="mantenimiento_ambiental">Tecnicatura Superior en Mantenimiento Industrial</option>
        <option value="recursos_humanos">Tecnicatura Superior en Administracion de Recursos Humanos</option>
        <option value="admin_contable">Tecnicatura Superior en Administracion Contable</option>
        <option value="higiene_seguridad">Tecnicatura Superior en Higiene y Seguridad en el Trabajo</option>
        <option value="laboratorio">Tecnicatura Superior en Laboratorio de Analisis Clinicos</option>
        <option value="sistemas">Tecnicatura Superior en Analisis en Sistemas</option> -->
        </select>
        </div>

        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Año</label>
        {{Form::select("anio", $anios, null, ["class" => "form-control", "placeholder" => "Seleccione el año" ]) }} 
        <!-- <select class="form-select" id="anio">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option> -->
        </select>
        </div>

        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Comision</label>
        {{Form::select("comision", $comisions, null, ["class" => "form-control", "placeholder" => "Seleccione la comision" ]) }} 
        </div>
    
        <div class="d-grid gap-2">
        <button class="btn btn-outline-dark" type="submit" aria-label="consultar">Consultar</button>
        </div>
          
    </div>

@endsection