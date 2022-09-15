@extends('backend.layouts.main')

@section('title', 'Carga de materias')

@section('content')
 <style>
.algo{
  display:flex;
  justify-content:space-between;
  border-radius:70px;
  margin:50px;
}

</style>

<div class="btn-group algo" role="group" aria-label="Basic example">
  <button style="border-radius:60px;" type="button" class="btn btn-success m-2 ">Plantilla para Programas</button>
    
  <button style="border-radius:60px;" type="button" class="btn btn-success m-2">Listado de Programas</button>
  
  <button style="border-radius:60px;" type="button" class="btn btn-success m-2">Programas Pendientes</button>
</div>


<!--  -->

@endsection