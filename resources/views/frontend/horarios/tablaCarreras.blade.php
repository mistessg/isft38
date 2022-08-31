@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')
<table class="table table-striped container mx-auto p-2" >
        <tr class="bg-secondary text-light bg-gradient">
            <th class="text-center" scope="col">HORARIO</th>
            <th class="text-center" scope="col">LUNES</th>
            <th class="text-center" scope="col">MARTES</th>
            <th class="text-center" scope="col">MIERCOLES</th>
            <th class="text-center" scope="col">JUEVES</th>
            <th class="text-center" scope="col">VIERNES</th>
            <th class="text-center" scope="col">SABADO</th>
        </tr>
        <tr class="border-bottom">
            <td  class="text-center">-</td>
            <td  class="text-center">HORARIO</td>
            <td  class="text-center">HORARIO</td>
            <td  class="text-center">HORARIO</td>
            <td  class="text-center">HORARIO</td>
            <td  class="text-center">HORARIO</td>
            <td  class="text-center">HORARIO</td>
        </tr>
</table>


@endsection