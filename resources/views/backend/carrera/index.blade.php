@extends('backend.layouts.main')
@section('title', 'Carreras')
@section('content')

<style>
  *{
    font-family: 'Quicksand', sans-serif;

  }
  .algo{
      text-align: center;
      display: flex;
      justify-content: center;
      width: auto;
  }
tr{
  height: 100px;
}
td{
    display: table-cell;
    vertical-align: middle;
}
a{
  margin-left: 10px;
}
button{
  margin-left: 10px;
}
.subconainer{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  flex-direction: row;
  
}
a{
  text-decoration: none;

}
.horario{
  color:black;
  border:1px solid black;
  border-radius:20px;
  padding: 10px;
}
.svg{
  padding: 15px;
  border-radius:50px;
}


</style>

     @forelse($carreras as $carrera)
       @if($loop->first)
       <div class="descripciones">
       <table class="table container" >  
        <tr>
          <div class="algo">
            <td>Id</td>
            <td>Carrera</td>
            <td>Resolución</td>
            <td>Resolución PDF</td>
            <td>
              <a class="btn btn-success svg" href="{{ route('carrera.create') }}">
              <img src="{{ asset('svg/new.svg') }}" width="20" height="20" alt="Crear" title="Crear">
              Crear Usuario
              </a>
          </td>
          </div>
        </tr>     
       @endif
       <tr>
        <div class="subconainer">
        <td>{{ $carrera->id }}</td>
        <td>Anaista de sistema{{ $carrera->carrera }}</td>
        <td>{{ $carrera->resolucion }}</td>        
        <td>
          @if($carrera->res_archivo)<span class="badge badge-light"><a href="{{ asset('./storage/'. $carrera->res_archivo) }}">{{ basename($carrera->res_archivo) }}</a> </span> @endif
        </td> 
         <td>
          {{ Form::model($carrera, [ 'method' => 'delete' , 'route' => ['carrera.destroy', $carrera->id] ]) }}
            @csrf  
            
        <a href="{{ route('carrera.show', ['carrera' => $carrera->id ]) }}"  class="btn btn-info svg">
          <img src="{{ asset('svg/show.svg') }}"  width="20" height="20" alt="Mostrar" title="Mostrar">
        </a> 

          <button type="submit" name="borrar{{$carrera->id}}" class="btn btn-danger  svg" onclick="if (!confirm('Está seguro de borrar la carrera?')) return false;">
            <img src="{{ asset('svg/delete.svg') }}" width="20" height="20"  alt="Borrar" title="Borrar">
          </button>

        <a href="{{ route('carrera.edit', ['carrera' => $carrera->id ]) }}" class="btn btn-primary svg " >
          <img src="{{ asset('svg/edit.svg') }}"  width="20" height="20"  alt="Editar" title="Editar">
        </a>       

        <a href="" class="horario" >Horarios 1°</a>     
        <a href="" class="horario">Horarios 2°</a> 
        <a href="" class="horario">Horarios 3°</a>          
            {!!Form::close()!!}  
         </td>
         </div>
      </tr>
       @if($loop->last)
       </table>
       </div>  
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
</div> 
@endsection