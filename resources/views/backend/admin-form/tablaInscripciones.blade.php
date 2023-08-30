@extends('backend.layouts.main')
@section('content')
<h1 class="h1 text-center mt-3 mb-4">Tabla de Inscripciones</h1>
<div class="container">
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary" href="{{ route('mostrarFormulario') }}">Crear inscripción</a>
    </div>
</div>
<div class="container mx-auto my-4">
    <table id="index" class="table table-striped dt-responsive nowrap border border-dark" style="width: 100%">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Hora</th>
            <th>DNI</th>
            <th>Carrera</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inscripciones as $inscripcion)
            <tr>
                <td>{{ $inscripcion->fecha }}</td>
                <td>{{ $inscripcion->hora }}</td>
                <td>{{ $inscripcion->dni }}</td>
                <td>{{ $inscripcion->deCarrera->descripcion}}</td>
                <td>
                    <div class="container">
                        <div class="d-flex d-inline">
                            <a class="btn btn-outline-primary m-2" href="{{ route('tablainscripciones.edit', $inscripcion->id) }}">Editar</a>
                            <form id="delete-form-{{ $inscripcion->id }}" action="{{ route('tablainscripciones.destroy', $inscripcion->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger m-2" type="button" onclick="confirmDelete('{{ $inscripcion->id }}')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
<script>
    function confirmDelete(id) {
        if (confirm("¿Estás seguro de que deseas eliminar este turno?")) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
    </script>
    <!-- 72) Scripts para el funcionamiento dinámico de la tabla -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#index').DataTable({
                "language":{
                    /* 73) Cambio de lenguaje al español */
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
                    "lengthMenu": "Mostrar de a _MENU_ registros",
                }
            });
        });
    </script>
@endsection
