@extends('backend.layouts.main')

@section('title', 'Módulo horario')

@section('content')
{{ Form::open(['route' => 'modulo.store']) }}
    <div class="container my-4">
    
        <div class="card">
        <h5 class="card-header" style=" background-color: #181818; color: white;">Agregar módulo</h5>
        <div class="card-body">
        {{ Form::open(['route' => 'modulo.store']) }}
        <div class="input-group mt-5 mb-3">
</div>
       
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Hora de inicio</label>
    {{Form::text("horainicio", null , ["class" => "form-control" ])}}
</div>   
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Hora de finalización</label>
    {{Form::text("horafin", null , ["class" => "form-control" ])}}
</div> 
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Duración en minutos</label>
    {{Form::number("duracion", null , ["class" => "form-control" ])}}
</div> 
        </br><button type="submit" style="width: 100%;" class="btn btn-primary">Agregar</button></div>
         {!!Form::close()!!}  
    </div> 
    {!!Form::close()!!}  

@endsection