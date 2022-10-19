@extends('frontend.layout.main')

@section('title', 'Horarios por Carreras')

@section('content')
<div class="container my-4">

    <div class="card">
        <h5 class="card-header" style="background-color: #181818; color: white;">Horarios por Profesor</h5>
        <div class="card-body">

            {{ Form::open(['route' => 'horarios.show.porProfesor']) }}

            <div class="input-group input-group-sm mt-2">
                <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
                <input type="text" id="apellido" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" onkeypress="crit_busqueda()">
            </div>
            <br>
            {{Form::select("profesor_id", $profesores, null, ["class" => "form-control", "id"=>"listado","size"=>"10","placeholder" => "Seleccione un profesor", "aria-label" =>"multiple select example"]) }}
            <br>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-dark" type="submit" aria-label="consultar">Consultar</button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>

        <script>
        function crit_busqueda() {
            var input = document.getElementById('apellido').value.toUpperCase();
            var output = document.getElementById('listado').options;
            for (var i = 0; i < output.length; i++) {
                var ingreso = output[i].text.toUpperCase();

                if (ingreso.indexOf(input) == 0) {
                    output[i].selected = true;
                    break;
                } else
                //if(document.forms[0].texto_busqueda.value=='')
                {
                    output[0].selected = true;
                }
            }
        }
        </script>
@endsection