@extends('frontend.layout.main')

@section('title', 'Horarios por Carrera')

@section('content')
<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>

<div class="container" style="display: flex ; align-items: center; justify-content: center">

    <div class="card my-4" style=" width: 50%;">
        <h5 class="card-header" style="background-color: #181818; color: white;">Horarios por carrera</h5>
        <div class="card-body">

            {{ Form::open(['route' => 'horarios.searchPorCarrera']) }}
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-text">
                    {{ Form::label("sede_id",'Sede', ['class' => 'control-label']) }}
                </div>
                {{Form::select("sede_id", $sedes, null, ["class" => "form-control", "placeholder" => "Seleccione la sede" ]) }}
            </div>
            @error('sede_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="input-group mb-3">
                <div class="input-group-text">
                    {{ Form::label("carrera",'Carrera', ['class' => 'control-label']) }}
                </div>
                {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera" ]) }}
            </div>
            @error('carrera_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="input-group mb-3">
                <div class="input-group-text"> 
                    {{ Form::label("año", 'Año', ['class' => 'control-label']) }}
                </div>
                {{Form::select("anio_id", $anios, null, ["class" => "form-control", "placeholder" => "Seleccione el año" ]) }}
            </div>
            @error('anio_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="input-group mb-3">
                <div class="input-group-text">
                    {{ Form::label("comision",'Comisión', ['class' => 'control-label']) }}
                </div>
                {{Form::select("comision_id", $comisions, null, ["class" => "form-control", "placeholder" => "Seleccione la comision" ]) }}
            </div>
            @error('comision_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="d-grid gap-2 col-5 my-4 mx-auto">
                <button class="form-control btn btn-outline-dark" style="margin-top:1rem;" type="submit">Consultar</button>
            </div>

        </div>
        {!!Form::close()!!}
    </div>
</div>

@endsection