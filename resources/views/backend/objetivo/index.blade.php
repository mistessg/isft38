@extends('backend.layouts.main')
@section('title', 'Objetivo')
@section('content')
     @forelse($carreras as $carrera)
       @if($loop->first)
       <table class="table table-dark">
        <tr>
          <td>Id</td>
          <td>Carrera</td>
          <td>Resolución</td>
          <td>Resolución PDF</td>
          <td>
          <a class="btn btn-success" href="{{ route('carreras.create') }}">
          <img src="{{ asset('svg/new.svg') }}" width="20" height="20" alt="Crear" title="Crear">
          </a>
         </td>
          </tr>
       @endif
       <tr>
        <td>{{ $carrera->id }}</td>
        <td>{{ $carrera->carrera }}</td>
        <td>{{ $carrera->resolucion }}</td>
        <td>
          @if($carrera->res_archivo)<span class="badge badge-light"><a href="{{ asset('./storage/'. $carrera->res_archivo) }}">{{ basename($carrera->res_archivo) }}</a> </span> @endif
        </td>
         <td>
          {{ Form::model($carrera, [ 'method' => 'delete' , 'route' => ['carreras.destroy', $carrera->id] ]) }}
            @csrf
<a href="{{ route('carreras.show', ['carrera' => $carrera->id ]) }}" class="btn btn-info"><img src="{{ asset('svg/show.svg') }}"  width="20" height="20" alt="Mostrar" title="Mostrar"></a>
            <button type="submit" name="borrar{{$carrera->id}}" class="btn btn-danger" onclick="if (!confirm('Está seguro de borrar la carrera?')) return false;"><img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar"></button>
        <a href="{{ route('carreras.edit', ['carrera' => $carrera->id ]) }}" class="btn btn-primary"><img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar"></a>
 <a href="{{ route('horarios.cargar', ['carrera' => $carrera->id, 'anio' => '1']) }}" class="btn btn-info">Horarios 1°</a>
 <a href="{{ route('horarios.cargar', ['carrera' => $carrera->id, 'anio' => '2' ]) }}" class="btn btn-info">Horarios 2°</a>
 <a href="{{ route('horarios.cargar', ['carrera' => $carrera->id, 'anio' => '3' ]) }}" class="btn btn-info">Horarios 3°</a>
            {!!Form::close()!!}
         </td>
      </tr>
       @if($loop->last)
       </table>
       @endif
   @empty
     <p class="text-capitalize"> No hay carreras.</p>
   @endforelse
 </div><hr>
<!-- Paginación -->
<div class="d-flex justify-content-center">
<!--
  Agregar en App\Providers\AppServiceProvider:
  use Illuminate\Pagination\Paginator;
      public function boot() { Paginator::useBootstrap(); } -->
      {!! $carreras->links() !!}
</div>
@endsection
