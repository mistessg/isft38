@extends('frontend.layout.main')

@section('title', 'Listado de materias')

@section('content')

<style>
  .img2 {
    border-radius: 5px;
    margin-left: 953px;
  }

  .Inicio {
    text-align: center;
    margin: 20px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 800;
    color: white;
  }

  .links {
    padding: 25px;
    width: 70%;
    margin: 0 auto;
  }

  .form-group {
    margin-top: 10px;
  }

  .form-group label {
    outline: none;
    margin-bottom: 5px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 800;
    font-size: 20px;
  }

  .form-select {
    border: 1px solid gray;
    padding: 10px;
    outline: none;
  }

  label {
    width: 6rem;
  }

  @media (max-width: 450px) {

    .card {
      margin: 1rem 1rem 1rem 1rem;

    }
  }

  .links {
    width: 100%;
    height: 70%;

  }

  .accordion {
    width: 100%;

  }

  .accordion-collapse {
    height: auto;
  }

  .card {
    width: 80%;
    margin: auto;
  }

  .accordion {
    width: 80%;
    margin: auto;
  }
</style>

<div class="Inicio">
  <h1 class="TextoInicio">Listado de programas</h1>
</div>



<div class="card">
  <h5 class="card-header" style=" background-color: #181818; color: white;">Consulte su programa</h5>
  <div class="card-body">

    {{ Form::open(['route' => 'programas.search']) }}
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
  </div>
</div>

<br>


<!-- ACORDEON -->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    @foreach($anios as $a)
    @php($titulo = $a->descripcion)

    @foreach($programas as $programa)
    @if($a->id == $programa->anio_id)

    @if($titulo)
    <h2 class="accordion-header" id="heading{{$a->id}}">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$a->id}}" aria-expanded="true" aria-controls="collapse{{$a->id}}">
        {{$titulo}} <br>
      </button>

    </h2>
    @endif
    <div id="collapse{{$a->id}}" class="accordion-collapse collapse " aria-labelledby="heading{{$a->id}}" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        @if($titulo)
        <table class="table">
          <thead>
            <tr>
              <th scope="col">MATERIA</th>
              <th scope="col">PROFESOR</th>

            </tr>
          </thead>
          <tbody>
            @endif
            <tr>

              <td><a target="_blank" href="{{asset('./storage/'. $programa->nombrearchivo)}}" style="color:cornflowerblue">{{$programa->materia->descripcion}}</td>
              <td>{{$programa->profesor->apellido}}-{{$programa->profesor->nombre}}</td>
              @if($titulo)
              @csrf
          </tbody>
          {!!Form::close()!!}
          @php($titulo = '')
          @endif
          @endif
          @endforeach
        </table>

      </div>
    </div>
    @endforeach
  </div>


  @endsection

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Script Get Materias -->
  <script type='text/javascript'>
    function search() {
      var sede_id = document.getElementById('sede_id').value;
      //var sede_id = document.getElementById('sede_id').value;
      var carrera_id = document.getElementById('carrera_id').value;
      $('#carrera_id').find('option').not(':first').remove();


      $.ajax({
        url: '/getCarreras/' + sede_id,
        type: 'get',
        dataType: 'json',
        success: function(response) {

          var len = 0;
          if (response['data'] != null) {
            len = response['data'].length;
          }

          if (len > 0) {

            for (var i = 0; i < len; i++) {

              var id = response['data'][i].id;
              var descripcion = response['data'][i].descripcion;

              var option = "<option value='" + id + "'>" + descripcion + "</option>";

              $("#carrera_id").append(option);
            }
          }

        }
      });
    }


    $(document).ready(function() {

      $('#sede_id').change(function() {
        search();

      });
    });
  </script>