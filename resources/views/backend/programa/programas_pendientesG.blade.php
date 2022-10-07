@extends('backend.layouts.main')

@section('title', 'Listado de materias')

@section('content')

<div class="container my-4">

  <div class="card">
    <h5 class="card-header" style=" background-color: #181818; color: white;">Programas pendientes</h5>
    <div class="card-body">

      {{ Form::open(['route' => 'programa.pendiente.search']) }}
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
    <style>
      .titulo {
        text-align: center;
        background-color: #141E27;
        color:aliceblue;
        border-radius: 15px;
        /*margin-left: 140px;
        margin-right: 140px; */
      }

      .btno {
        margin-left: 800px;
        margin-right: 150px;
      }
      .p{
        text-align: center;
        font-family: varela;
      }
      .entre{
        background-color: #3CCF4E;
        border-radius: 20px;
        text-align: center;
      }
      .pendientes{
        background-color: #EB1D36;
        border-radius: 20px;
        text-align: center;
      }
    </style>

    @foreach($anios as $a)

    <h5 class="titulo"> {{$a->descripcion}} <br>
      @php($m=0)
      @php($e=0)
    </h5>

    @foreach($materias as $materia)
    @if($a->id == $materia->anio_id)
    Materia:{{$materia->descripcion}}<br>
    @php($m++)
    
    
    @foreach($programas as $programa)
    @if($materia->id == $programa->materia_id)
    
    @php($e++)
  
    Programa:{{$programa->materia->descripcion}} -{{$programa->profesor->apellido}}, {{$programa->profesor->nombre}}
    <br>
    @endif

    @endforeach

    @endif

    @endforeach
      

    @php($p = $m - $e)
    <div class="d-grid gap-2 btno">
      <p class="entre">ENTREGADOS:{{$e}}</p>  
      <p class="pendientes">PENDIENTES:{{$p}}</p>
    </div>
    @endforeach



    @endsection


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Script Get Materias -->
<script type='text/javascript'>

  function search(){
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