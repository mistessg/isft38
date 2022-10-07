@extends('frontend.layout.main')
@section('title', 'Horarios por Profesor')

@section('content')
    
<style>
    .tabla-porDiaHora{
        color:#fff;
    }
</style>
<div class="container">
<table class="tabla-porDiaHora d-flex">
    <tr class="d-flex flex-row ">
            <th class="mx-2 px-5 text-center">Horario</th>
            <th class="mx-2 px-5 text-center">Profesor</th>
            <th class="mx-2 px-5 text-center">Materia</th>
            <th class="mx-2 px-5 text-center">Curso</th>
    </tr>
    
        @foreach($horarios as $horario)
        <tr class="d-flex flex-row text-left ">
            <td class="mx-2 px-5 ">{{$horario->moduloHorario->horainicio }} - {{$horario->moduloHorario->horafin}} </td>
            <td class="mx-2 px-5 ">{{$horario->profesor->nombre}} - {{$horario->profesor->apellido}}</td>
            <td class="mx-2 px-5 ">{{$horario->carrera->descripcion}}</td>
            <td class="mx-2 px-5 ">{{$horario->materia->descripcion}}</td>
            </tr>
        @endforeach
    
</table>

</div>
@endsection