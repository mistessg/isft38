@extends('backend.layouts.main')
@section('content')
<div class="container mt-5 p-4 border border-black rounded">
    <h1 class="h1 text-center border-bottom mb-4">Configuración de días y horas de inscripción</h1>
    <form action="{{ route('guardarHorarios') }}" method="POST" class="form">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="form-group mb-4">
                        <label for="fecha_inicio">Fecha de inicio:</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-4">
                        <label for="fecha_fin">Fecha de fin:</label>
                        <input type="date" id="fecha_fin" name="fecha_fin" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="form-group mb-4">
                        <label for="hora_inicio">Hora de inicio:</label>
                        <input type="time" id="hora_inicio" name="hora_inicio" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-4">
                        <label for="hora_fin">Hora de fin:</label>
                        <input type="time" id="hora_fin" name="hora_fin" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="form-group mb-4">
                        <label for="intervalo">Intervalo de tiempo (minutos):</label>
                        <input type="number" id="intervalo" name="intervalo" min="1" required class="form-control">
                    </div>
                 </div>
            </div>
        </div>
            <div class="row text-end">
                <div class="col-md-12">
                    <input type="submit" value="Guardar Horarios" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
