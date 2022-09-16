@extends('backend.layouts.main')

@section('title', 'Horarios por Carrera')

@section('content')

    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-md">
        <a class="navbar-brand text-white" href="#">Consultar horarios</a>
      </div>
    </nav>

    <div class="container my-4"> 
    
        <div class="card">
        <h5 class="card-header" style=" background-color: #181818; color: white;">Horarios por Carrera</h5>
        <div class="card-body">
        {{ Form::open(['route' => 'horarios.searchPorCarrera']) }}
        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Sede</label>
        {{Form::select("sede_id", $sedes, null, ["class" => "form-control", "placeholder" => "Seleccione la sede" ]) }} 
        </div>

        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Carreras</label>
        {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera" ]) }}    
        </select>
        </div>

        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Año</label>
        {{Form::select("anio_id", $anios, null, ["class" => "form-control", "placeholder" => "Seleccione el año" ]) }} 
        </select>
        </div>

        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Comisión</label>
        {{Form::select("comision_id", $comisions, null, ["class" => "form-control", "placeholder" => "Seleccione la comision" ]) }} 
        </div>
    
        </br><button type="submit" style="width: 100%;" class="btn btn-dark">Consultar</button></div>
         {!!Form::close()!!}  
    </div>
   
@endsection