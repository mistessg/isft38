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
        <td>{{ $materia->id }}</td>
        <td>{{ $materia->descripcion }}</td>
        <td>{{ $materia->deCarrera->descripcion }}</td>
        <td></td> 
        <td>
          @if($materia->contenidos)<span class="badge badge-light"><a href="{{ asset('./storage/'. $materia->contenidos) }}">{{ basename($materia->contenidos) }}</a> </span> @endif
        </td> 
        <td>
          {{ Form::model($materia, [ 'method' => 'delete' , 'route' => ['materia.destroy', $materia->id] ]) }}
            @csrf  
          <div class="botonera">
            <a href="{{ route('materia.show', ['materium' => $materia->id ]) }}"  class="btn btn-info svg">
              <img src="{{ asset('svg/show.svg') }}"  width="20" height="20" alt="Mostrar" title="Mostrar">
            </a>

              <button type="submit" name="borrar{{$materia->id}}" class="btn btn-danger  svg" onclick="if (!confirm('Está seguro de borrar la carrera?')) return false;">
                <img src="{{ asset('svg/delete.svg') }}" width="20" height="20"  alt="Borrar" title="Borrar">
              </button>

            <a href="{{ route('materia.edit', ['materium' => $materia->id ]) }}" class="btn btn-primary svg " >
              <img src="{{ asset('svg/edit.svg') }}"  width="20" height="20"  alt="Editar" title="Editar">
            </a>
          </div>
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