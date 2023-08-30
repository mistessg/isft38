<!-- resources/views/tabla_inscripciones/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-5 p-4 border border-black rounded">
    <h1 class="h1 text-center border-bottom mb-4">Editar inscripción</h1>
    <form action="{{ route('tablainscripciones.update', $inscripcion) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group mb-4">
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $inscripcion->fecha }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-4">
                        <label for="hora">Hora</label>
                        <input type="time" name="hora" id="hora" class="form-control" value="{{ $inscripcion->hora }}" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group mb-4">
                        <label for="dni">DNI:</label>
                        <input type="number" name="dni" id="dni" class="form-control" value="{{ $inscripcion->dni }}" oninput="validateDNI(this)"/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="carrera">Carrera:</label>
                        <select name="carrera_id" id="carrera_id" class="form-control">

                            @foreach($carreras as $carrera)
                                <option value="{{ $carrera->id }}">
                                    {{ $carrera->descripcion }}

                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row text-end">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>
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
