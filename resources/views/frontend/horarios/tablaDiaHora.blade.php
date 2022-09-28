@extends('backend.layouts.main')

@section('title', 'Horarios por Profesor')

@section('content')
    

@forelse($horarios as $horario)
    @if($loop->first)
        <table class="table m-o">
            <tr class="text-light" style="background-color: #3A70FF;">
                 <td class="align-middle ps-5">Sede</td>
            </tr>
    @endif
            <tr>
                <td class="align-middle ps-5">Modulo</td>
                <td class="align-middle">{{ $profesor->apellido}}, {{ $profesor->nombre}}</td>
                <td class="align-middle">{{ materia}}</td>
                <td class="align-middle">{{ carrera}}</td>
            </tr>
     @if($loop->last)
        </table>

    @endif
    @empty
@endforelse
    </div>


@endsection