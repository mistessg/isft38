@extends('backend.layouts.blog')
@section('title', 'Etiquetas')
@section('content')
     @forelse($etiquetas as $etiqueta)
       @if($loop->first)
       <table class="table table-dark">  
        <tr>
          <td>Id</td>
          <td>Nombre</td>
          <td>Descripción</td>          
          <td>
          <a class="btn btn-success" href="{{ route('etiquetas.create') }}">
          <img src="{{ asset('svg/new.svg') }}" width="20" height="20" alt="Crear" title="Crear">
          </a>
         </td>
          </tr>     
       @endif
       <tr>
        <td>{{ $etiqueta->id }}</td>
        <td>{{ $etiqueta->nombre }}</td>
        <td>{{ $etiqueta->descripcion }}</td>        
         <td>
          {{ Form::model($etiqueta, [ 'method' => 'delete' , 'route' => ['etiquetas.destroy', $etiqueta->id] ]) }}
            @csrf  
<a href="{{ route('etiquetas.show', ['etiqueta' => $etiqueta->id ]) }}" class="btn btn-info"><img src="{{ asset('svg/show.svg') }}"  width="20" height="20" alt="Mostrar" title="Mostrar"></a> 
          <a href="{{ route('etiquetas.edit', ['etiqueta' => $etiqueta->id ]) }}" class="btn btn-primary"><img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar"></a>             
            <button type="submit" name="borrar{{ $etiqueta->id }}"class="btn btn-danger" onclick="if (!confirm('Está seguro de borrar la etiqueta?')) return false;"><img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar"></button>
            {!!Form::close()!!}  
         </td>
      </tr>
       @if($loop->last)
       </table>  
       @endif
   @empty
     <p class="text-capitalize"> No hay etiquetas.</p>
   @endforelse   
 </div><hr>
<!-- Paginación -->
<div class="d-flex justify-content-center">
<!-- 
  Agregar en App\Providers\AppServiceProvider:
  use Illuminate\Pagination\Paginator;
      public function boot() { Paginator::useBootstrap(); } --> 
      {!! $etiquetas->links() !!}
</div> 
@endsection