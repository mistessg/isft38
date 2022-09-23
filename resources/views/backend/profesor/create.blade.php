@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')

{{ Form::open(['route' => 'profesor.store']) }}
    <div class="container my-4">
    
        <div class="card">
        <h5 class="card-header" style=" background-color: #181818; color: white;">Agregar profesor</h5>
        <div class="card-body">
        {{ Form::open(['route' => 'profesor.store']) }}
        <div class="input-group mt-5 mb-3">
</div>
       
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Nombre</label>
    {{Form::text("nombre", null , ["class" => "form-control" ])}}
</div>   
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Apellido</label>
    {{Form::text("apellido", null , ["class" => "form-control" ])}}
</div> 
        </br><button type="submit" style="width: 100%;" class="btn btn-primary">Agregar</button></div>
         {!!Form::close()!!}  
    </div> 
    {!!Form::close()!!}  
@endsection