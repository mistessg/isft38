@extends('frontend.layout.main')

@section('title', 'Horarios por Dia y Hora')

@section('content')
    
<div class="container" style="display: flex ; align-items: center; justify-content: center">
    
    <div class="card my-4"  style=" width: 50%;">
        <h5 class="card-header" style="background-color: #181818; color: white;">Horarios por Dia/Hora</h5>
        <div class="card-body">

        {{ Form::open(['route' => 'horarios.searchPorDiaHora']) }}
        <label class="mb-1" for="#">Día</label>
        <div class="input-group mb-3">
        {{Form::select("dias", $dias, null, ["class" => "form-control", "placeholder" => "Seleccione un dia"]) }}   
        </div> 
        <label class="mb-1" for="#">Hora</label>
        <div class="input-group mb-3">
         {{Form::select("modulohorario_id", $modulohorario, null, ["class" => "form-control", "placeholder" => "Seleccione un modulo", "aria-label" =>"multiple select example"]) }}   

        </div>
        
        <div class="d-grid gap-2 col-5 my-4 mx-auto">
            <button class="form-control btn btn-outline-dark" type="submit">Consultar</button>
        </div>
        </div>
    {!!Form::close()!!} 
    </div>
</div>
@endsection