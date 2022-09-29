@extends('backend.layouts.main')
@section('title', 'Comision')
@section('content')



<div class="container" style="display: flex ; align-items: center; justify-content: center">
    
    <div class="card my-4"  style=" width: 50%;">
        <h5 class="card-header" style="background-color: #181818; color: white;">Crear Comision</h5>
    <div class="card-body">

    {{ Form::open(['route' => 'horario.store']) }}
        <div class="input-group mt-5 mb-3">


          {{Form::text("comision", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese la nueva comision", ])}}    
          @error('descripcion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div> 
        
        <div class="d-grid gap-2 my-4 mx-auto">
            <button class="form-control btn btn-outline-dark" type="button">Guardar</button>
        </div>

    </div>
    {!!Form::close()!!} 
</div>


@endsection