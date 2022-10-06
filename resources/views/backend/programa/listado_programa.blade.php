@extends('backend.layouts.main')

@section('title', 'Listado de materias')

@section('content')

<style>
  .img {
    border-radius: 100px;
  }

  .img2 {
    border-radius: 100px;
    margin-left: 900px;
    margin-right: 40px;
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
      </div>
      @error('anio_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror


      <div class="input-group mb-3">
        {{ Form::label("sede_id", 'Sede', ['class' => 'input-group-text']) }}
        {{Form::select("sede_id", $sedes, $sede, ["class" => "form-select", "placeholder" => "Seleccione una sede"]) }}
      </div>
      @error('sede_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror


      <div class="input-group mb-3">
        {{ Form::label("carrera_id", 'Carrera', ['class' => 'input-group-text']) }}
        {{Form::select("carrera_id", $carreras, $carrera, ["class" => "form-select", "placeholder" => "Seleccione una carrera"]) }}
      </div>
      @error('carrera_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror



      <div class="input-group mb-3">
        {{ Form::label("comision_id", 'Comisión', ['class' => 'input-group-text']) }}
        {{Form::select("comision_id", $comisiones, $comision, ["class" => "form-select", "placeholder" => "Seleccione una comisión"]) }}
      </div>
      @error('carrera')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror




      <div class="d-grid gap-2">

        @error('comision_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="d-grid gap-2">
        <button class="btn btn-outline-dark" type="submit" aria-label="consultar">Consultar</button>
      </div> {!!Form::close()!!}
      <br>
    </div>
    <a href="{{ route('programa.create') }}" class="btn btn-success img2">Crear uno nuevo
      <img src="{{ asset('svg/new.svg') }}" height="30" width="20" alt="Crear" title="Crear">
    </a>
    <br>

    <!-- ACORDEON -->
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        @foreach($anios as $a)
        @php($titulo = $a->descripcion)

        @foreach($programas as $programa)
        @if($a->id == $programa->anio_id)

        <h2 class="accordion-header" id="heading{{$a->id}}">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$a->id}}" aria-expanded="true" aria-controls="collapse{{$a->id}}">
            @if($titulo)
            {{$titulo}} <br>
            @php($titulo = '')
            @endif
          </button>
        </h2>
        <div id="collapse{{$a->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$a->id}}}" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">MATERIA</th>
                  <th scope="col">PROFESOR</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  {{ Form::model($programa, [ 'method' => 'delete' , 'route' => ['programa.destroy', $programa->id] ]) }}

                  <td><a target="_blank" href="{{asset('./storage/'. $programa->nombrearchivo)}}">{{$programa->materia->descripcion}}</td>
                  <td>{{$programa->profesor->apellido}},{{$programa->profesor->nombre}}</td>

                  @csrf
                  <td>
                    <div class="botonera">
                      <button type="submit" name="borrar{{$programa->id}}" class="btn btn-danger  svg img" onclick="if (!confirm('Está seguro de borrar el programa?')) return false;">
                        <img src="{{ asset('svg/delete.svg') }}" width="20" height="30" alt="Borrar" title="Borrar">
                      </button>

                      <a href="{{ route('programa.edit', ['programa' => $programa->id ]) }}" class="btn btn-primary svg img">
                        <img src="{{ asset('svg/edit.svg') }}" width="20" height="30" alt="Editar" title="Editar">
                      </a>
                    </div>
                  </td>
              </tbody>
              {!!Form::close()!!}
              @endif
              @endforeach
            </table>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>



@endsection
</div>




</div>