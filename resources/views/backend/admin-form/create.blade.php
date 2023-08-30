<!-- resources/views/tabla_inscripciones/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear inscripción</h1>

    <form action="{{ route('tablainscripciones.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="time" name="hora" id="hora" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="carrera">Carrera</label>
            <input type="text" name="carrera" id="carrera" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
