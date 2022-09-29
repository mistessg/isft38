@extends('backend.layouts.main')
@section('title', 'Comision')
@section('content')
<<<<<<< Updated upstream
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-md">
    <a class="navbar-brand text-white" href="#">Comisión</a>
  </div>
</nav>
<br>

{{ Form::open(['route' => 'comision.store', 'files' => true]) }}
@csrf
<div class="container my-4">

  <div class="card">
    <h5 class="card-header" style=" background-color: #181818; color: white;">Agregar</h5>
    <div class="card-body">
      <!-- {{ csrf_field() }} -->
      <div class="input-group mb-3">
        <label class="input-group-text" for="#">Comisión</label>
        {{Form::text("comision", null, ["class" => "form-control" ])}}
      </div>
      @error('comision')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="">
        <button type="submit" class="btn btn-outline-dark form-control">Agregar</button>
      </div>
=======


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
>>>>>>> Stashed changes
    </div>
    {!!Form::close()!!} 
</div>

<<<<<<< Updated upstream
    </br>

  </div>
</div>
{!!Form::close()!!}
=======
>>>>>>> Stashed changes

@endsection