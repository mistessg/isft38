@extends('backend.layouts.main')
@section('title', 'Comision')
@section('content')
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
    </div>

    </br>

  </div>
</div>
{!!Form::close()!!}

@endsection