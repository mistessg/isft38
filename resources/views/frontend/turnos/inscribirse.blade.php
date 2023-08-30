@extends('frontend.layout.main')
@section('content')
<style>
    @media (min-width:400px){
    .section-content{
     min-height: calc(100vh - 270px);
    }
}
</style>
<div class="section-content">
    <div class="container mt-5 p-4 border border-black rounded">
        <h1 class="h1 text-center border-bottom mb-4">Solicitar turno</h1>
        @if (Session::get('error'))
            <div class="alert alert-danger mt-4">
                {{ Session::get('error')}}
            </div>
        @endif
        <form action="{{ route('guardarTurno') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label for="fecha">Fecha:</label>
                        <select name="fecha" id="fecha" class="form-control">
                            @foreach ($fechasConDia as $fecha => $fechaConDia)
                                <option value="{{ $fecha }}">{{ $fechaConDia }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="hora">Hora:</label>
                        <select name="hora" id="hora" class="form-control">
                            <!-- Las opciones de hora se cargarán dinámicamente -->
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label for="dni">DNI:</label>
                        <input type="number" name="dni" id="dni" class="form-control" placeholder="DNI" oninput="validateDNI(this)"/>
                    </div>
                    <div class="form-group">
                        <label for="carrera">Carrera:</label>
                        <select name="carrera_id" id="carrera_id" class="form-control">
                            @foreach($carreras as $index => $carrera)
                                <option value="{{$index}}">{{ $carrera }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row text-end">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        actualizarHorasDisponibles();

        $('#fecha').change(function() {
            actualizarHorasDisponibles();
        });

        function actualizarHorasDisponibles() {
            var fechaSeleccionada = $('#fecha').val();
            var horasDisponibles = @json($horas);

            var opcionesHora = $('#hora');

            opcionesHora.empty();

            if (horasDisponibles.hasOwnProperty(fechaSeleccionada)) {
                $.each(horasDisponibles[fechaSeleccionada], function(index, hora) {
                    opcionesHora.append($('<option>', {
                        value: hora,
                        text: hora
                    }));
                });
            } else {
                opcionesHora.append($('<option>', {
                    value: '',
                    text: 'No hay horarios disponibles'
                }));
            }
        }
    });
</script>
<script>
    function validateDNI(input) {
        var dni = input.value;
        if (dni.length !== 8) {
            input.setCustomValidity("El DNI debe tener 8 dígitos");
        } else {
            input.setCustomValidity("");
        }
    }
    // @if(Session::has('error'))
    //     alert("{{ Session::get('error') }}");
    // @endif
</script>

@endsection
