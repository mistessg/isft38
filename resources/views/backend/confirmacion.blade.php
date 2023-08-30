@extends('layout')

@section('content')
    <h1>Confirmación</h1>

    <p>Los datos enviados son:</p>

    <ul>
        <li>Nombre: {{ $datos['fecha'] }}</li>
        <li>Email: {{ $datos['hora'] }}</li>
        <!-- Otros campos del formulario -->
    </ul>
@endsection
