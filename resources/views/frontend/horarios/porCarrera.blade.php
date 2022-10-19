@extends('frontend.layout.main')

@section('title', 'Horarios por Carrera')

@section('content')
<div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
</div>

<div class="container my-4">

    <div class="card">
        <h5 class="card-header" style=" background-color: #181818; color: white;">Horarios por Carrera</h5>
        <div class="card-body">
            {{ Form::open(['route' => 'horarios.searchPorCarrera']) }}
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-text">
                    {{ Form::label("sede_id",'Sede', ['class' => 'control-label']) }}
                </div>
                {{Form::select("sede_id", $sedes, null, ["class" => "form-control", "placeholder" => "Seleccione la sede" ]) }}
                @error('sede_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    {{ Form::label("carrera",'Carrera', ['class' => 'control-label']) }}
                </div>
                {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera" ]) }}
                @error('carrera_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    {{ Form::label("año", 'Año', ['class' => 'control-label']) }}
                </div>
                {{Form::select("anio_id", $anios, null, ["class" => "form-control", "placeholder" => "Seleccione el año" ]) }}
                @error('anio_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    {{ Form::label("comision",'Comisión', ['class' => 'control-label']) }}
                </div>
                {{Form::select("comision_id", $comisions, null, ["class" => "form-control", "placeholder" => "Seleccione la comision" ]) }}
                @error('comision_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            </br><button type="submit" class="btn btn-dark form-control">Consultar</button>
        </div>
        {!!Form::close()!!}
    </div>
</div>

@endsection