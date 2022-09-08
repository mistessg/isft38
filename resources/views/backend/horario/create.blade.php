@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')

{{ Form::open(['route' => 'horario.store']) }}
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Sede</label>
    {{Form::text("sede", $sede->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}

</div>

<div class="input-group mb-3">
    <label class="input-group-text" for="#">Carrera</label>
    {{Form::text("carrera", $carrera->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}

</div>


</br><button type="submit" style="width: 100%;" class="btn btn-primary">Consultar</button></div>
{!!Form::close()!!}
    <div class="container my-4">
    
        <div class="card">
        <h5 class="card-header" style=" background-color: #181818; color: white;">Cargar horarios</h5>
        <div class="card-body">
        {{ Form::open(['route' => 'horario.store']) }}
        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Sede</label>
        {{Form::select("sede_id", $sedes, null, ["class" => "form-control", "placeholder" => "Seleccione la sede" ]) }} 
        </div>

        <div class="input-group mb-3">
        {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera" ]) }}    
        </select>
        </div>

        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Año</label>
        {{Form::select("anio_id", $anios, null, ["class" => "form-control", "placeholder" => "Seleccione el año" ]) }} 
        </select>
        </div>

        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Comision</label>
        {{Form::select("comision_id", $comisions, null, ["class" => "form-control", "placeholder" => "Seleccione la comision" ]) }} 
        </div>
    
        </br><button type="submit" style="width: 100%;" class="btn btn-primary">Agregar</button></div>
         {!!Form::close()!!}  
    </div> 

@endsection