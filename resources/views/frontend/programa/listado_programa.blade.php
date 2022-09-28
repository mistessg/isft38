@extends('backend.layouts.main')

@section('title', 'Listado de materias')

@section('content')

<style>
  body{
    background-color: #181818;
  }
thead{
  color: #181818;
  background-color: #9FC9F3;
}
tbody{
  background-color: #C4D7E0;
}
</style>

<div class="container my-4">

  <div class="card">
    <h5 class="card-header" style=" background-color: #181818; color: white;">Consulte su programa</h5>
    <div class="card-body">

      {{ Form::open(['route' => 'programa.search']) }}
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
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">MATERIA</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">PROGRAMA</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$programa->materia->descripcion}}</td>
                    <td>{{$programa->profesor->apellido}}</td>
                    <td>{{$programa->profesor->nombre}}</td>
                    <td>Progrma</td>
                  </tr>
                </tbody>
              </table>
              
              @endif
              @endforeach
              @endforeach
            </div>
          </div>
        </div>

        @endsection
      </div>
 </div>
</div>