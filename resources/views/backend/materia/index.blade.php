@extends('backend.layouts.main')
@section('title', 'Materias')
@section('content')
     @forelse($materias as $materia)
       @if($loop->first)
       <table class="table table-dark">  
        <tr>
          <td>Id</td>
          <td>Materia</td>
          <td>Carrera</td>
          <td>Año</td>
          <td>Programa</td>
          <td>
          <a class="btn btn-success" href="{{ route('materia.create') }}">
          <img src="{{ asset('svg/new.svg') }}" width="20" height="20" alt="Crear" title="Crear">
          </a>
         </td>
          </tr>     
       @endif
       <tr>
        <td></td>
        <td>{{ $materia->descripcion }}</td>
        <td>{{ $carreras}}</td>
        <td></td> 
        <td>
          @if($materia->contenidos)<span class="badge badge-light"><a href="{{ asset('./storage/'. $materia->contenidos) }}">{{ basename($materia->contenidos) }}</a> </span> @endif
        </td> 
         <td>
          {{ Form::model($materia, [ 'method' => 'delete' , 'route' => ['materia.destroy', $materia->id] ]) }}
            @csrf  

            {!!Form::close()!!}  
         </td>
      </tr>
       @if($loop->last)
       </table>  
       @endif
   @empty
     <p class="text-capitalize"> No hay materias.</p>
   @endforelse   
 </div><hr>
<!-- Paginación -->
<div class="d-flex justify-content-center">
<!-- 
  Agregar en App\Providers\AppServiceProvider:
  use Illuminate\Pagination\Paginator;
      public function boot() { Paginator::useBootstrap(); } --> 
</div> 
@endsection