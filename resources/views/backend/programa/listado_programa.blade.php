@extends('backend.layouts.main')

@section('title', 'Listado de materias')

@section('content')

<div class="container my-4">

  <div class="card">
    <h5 class="card-header" style=" background-color: #181818; color: white;">Consulte su programa</h5>
    <div class="card-body">

      {{ Form::open(['route' => 'programa.search', 'method' => 'post' ])}}
      @csrf

      <div class="input-group mb-3">
        {{ Form::label("anio_id", 'Periodo', ['class' => 'input-group-text']) }}
        {{Form::select("anio_id", $periodos, $periodo, ["class" => "form-select", "placeholder" => "Seleccione un período"]) }}
        @error('año')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="input-group mb-3">
        {{ Form::label("sede_id", 'Sede', ['class' => 'input-group-text']) }}
        {{Form::select("sede_id", $sedes, $sede, ["class" => "form-select", "placeholder" => "Seleccione una sede"]) }}
        @error('sede')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>


      <div class="input-group mb-3">
        {{ Form::label("carrera_id", 'Carrera', ['class' => 'input-group-text']) }}
        {{Form::select("carrera_id", $carreras, $carrera, ["class" => "form-select", "placeholder" => "Seleccione una carrera"]) }}
        @error('carrera')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      </div>

      <div class="input-group mb-3">
        {{ Form::label("comision_id", 'Comisión', ['class' => 'input-group-text']) }}
        {{Form::select("comision_id", $comisiones, $comision, ["class" => "form-select", "placeholder" => "Seleccione una comisión"]) }}
        @error('carrera')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>



      <div class="d-grid gap-2">
        <button class="btn btn-outline-dark" type="submit" aria-label="consultar">Consultar</button>
      </div>
      <br>
      {!!Form::close()!!}

      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">

              @foreach($anios as $a)

              @php($titulo = $a->descripcion)

              @foreach($programas as $programa)
              @if($a->id == $programa->anio_id)
              @if($titulo)
              {{$titulo}} <br>
              @php($titulo = '')
              @endif
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <a target="_blank" href="{{asset('./storage/'. $programa->nombrearchivo)}}">{{$programa->materia->descripcion}} - {{$programa->profesor->apellido}}, {{$programa->profesor->nombre}}</a>
              {{ Form::model($sede, [ 'method' => 'delete' , 'route' => ['programa.destroy', $programa->id] ]) }}
              @csrf
              {{Form::text("id", $programa->id , ["class" => "form-control", "hidden" ])}}
              <div class="botonera">
                <button type="submit" name="borrar{{$programa->id}}" class="btn btn-danger  svg" onclick="if (!confirm('Está seguro de borrar el programa?')) return false;">
                  <img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar">
                </button>

                <a href="{{ route('programa.edit', ['programa' => $programa->id ]) }}" class="btn btn-primary svg ">
                  <img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar">
                </a>
              </div>
              {!!Form::close()!!}
              <br>
              @endif
              @endforeach
              @endforeach
            </div>
          </div>
        </div>

        @endsection
      </div>