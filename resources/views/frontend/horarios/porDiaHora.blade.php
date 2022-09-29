@extends('backend.layouts.main')

@section('title', 'Horarios por Dia y Hora')

@section('content')
    
<div class="container my-4">
    
    <div class="card">
        <h5 class="card-header" style="background-color: #181818; color: white;">Horarios por Dia/Hora</h5>
    <div class="card-body">

    {{ Form::open(['route' => 'horarios.searchPorDiaHora']) }}
    <div class="input-group mb-3">
    <label class="" for="#">Sede</label>
        {{Form::time("diahora", null, ["class" => "form-control"]) }} 
    </div>


    <div class="d-grid gap-2 col-5 my-4 mx-auto">
        <button class="btn btn-outline-dark" type="button">Consultar</button>
    </div>
</div>

@endsection