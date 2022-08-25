@extends('backend.layouts.main')
@section('title', 'Horarios')
@section('content')
     @forelse($modulos as $modulo)
       @if($loop->first)
       <table class="table table-dark">  
        <tr>
          <td><strong>{{$c->carrera}} - {{$anio}}° año</strong></td>
         @foreach($dias as $dia)
         <td>{{$dia}}</td>
         @endforeach
          </tr>     
       @endif
        
       <tr>
             <td>{{ $modulo }}</td>
         @foreach($dias as $dia)
   
        <td>
          @forelse($horarios as $horario)
            @if ($horario->modulo == $modulo && 
                $horario->dia == $dia)
                <a class="btn btn-primary" href="{{ route('horarios.update', ['horario' => $horario->id]) }}">
          <img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="{{__('noticias.editar')}}" title="{{__('noticias.editar')}}">
          </a> {{ $horario->materia->materia}}
              @break
              }
            @endif
            @if($loop->last)
            <a class="btn btn-success" href="{{ route('horarios.create', ['carrera' => $carrera , 'modulo' => $modulo, 'dia' => $dia,  'anio' => $anio]) }}">
          <img src="{{ asset('svg/new.svg') }}" width="20" height="20" alt="Crear" title="Crear">
          </a></td>
            @endif
          @empty
            <a class="btn btn-success" href="{{ route('horarios.create', ['carrera' => $carrera , 'modulo' => $modulo, 'dia' => $dia,  'anio' => $anio]) }}">
          <img src="{{ asset('svg/new.svg') }}" width="20" height="20" alt="Crear" title="Crear">
          </a></td>
          @endforelse
          
     
          @endforeach  
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
       
</div> 
@endsection