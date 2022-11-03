@extends('frontend.layout.main')
@section('title', 'Horarios por Profesor')

@section('content')
    
<style>

.container{
    min-height: 80vh;
}
    .texto-tabla {
        font-size: .8em;
    }
    .table {
    margin-top: 3rem;
}

label{
    width: 100% !important;
    margin: 1rem 0;
}
input{
    width: 100% !important;
}

</style>


<div class="container">
<table class="table m-o mt-4" style="background-color: #3A70FF;">
    <tr class="text-light" style="background-color: #3A70FF;">
            <th class="align-middle ps-5">Horario</th>
            <th class="align-middle">Profesor</th>
            <th class="align-middle">Materia</th>
            <th class="align-middle">Curso</th>
    </tr>
    
        @foreach($horarios as $horario)
        <tr class="">
            <td class="align-middle ps-5" style="background: #F5F5F5;">{{$horario->moduloHorario->horainicio }} - {{$horario->moduloHorario->horafin}} </td>
            <td class="align-middle" style="background: #F5F5F5;">{{$horario->profesor->nombre}} - {{$horario->profesor->apellido}}</td>
            <td class="align-middle" style="background: #F5F5F5;">{{$horario->carrera->descripcion}}</td>
            <td class="align-middle" style="background: #F5F5F5;">{{$horario->materia->descripcion}}</td>
        </tr>
        @endforeach
    
</table>
</div>




   
@endsection