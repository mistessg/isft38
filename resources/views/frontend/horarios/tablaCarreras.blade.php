@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

<!-- @section('content')
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
</table> -->

{{ Form::open(['route' => 'horario.store']) }}
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Sede</label>
    {{Form::text("sede", $sede->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}

</div>

<div class="input-group mb-3">
    <label class="input-group-text" for="#">Carrera</label>
    {{Form::text("carrera", $carrera->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}

</div>


</br><button type="submit" style="width: 100%;" class="btn btn-primary">Consultar</button></div>
{!!Form::close()!!}

@foreach($horarios as $horario)
@if($loop->first)
<table class="table table-dark">
    <tr>
        <th class="text-center" scope="col">HORARIO</th>
        @foreach($dias as $dia)
        <th class="text-center" scope="col">{{$dia}}</th>
        @endforeach
     </tr>
     @endif
        @foreach($horarios as $horario)
        
        <tr>

        <td>{{$horario->moduloHorario->horainicio}} - {{$horario->moduloHorario->horafin}}</td>
        <td>{{$horario->materia->descripcion}} {{$horario->profesor->apellido}}, {{$horario->profesor->nombre}}<br> 
        <a href="{{ route('horario.create') }}" class="btn btn-success">
        <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
        </a></td>
        <td>{{$horario->materia->descripcion}} {{$horario->profesor->apellido}}, {{$horario->profesor->nombre}}<br> 
        <a href="{{ route('horario.create') }}" class="btn btn-success">
        <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
        </a></td>
        <td>{{$horario->materia->descripcion}} {{$horario->profesor->apellido}}, {{$horario->profesor->nombre}}<br> 
        <a href="{{ route('horario.create') }}" class="btn btn-success">
        <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
        </a></td>
        <td>{{$horario->materia->descripcion}} {{$horario->profesor->apellido}}, {{$horario->profesor->nombre}}<br> 
        <a href="{{ route('horario.create') }}" class="btn btn-success">
        <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
        </a></td>
        <td>{{$horario->materia->descripcion}} {{$horario->profesor->apellido}}, {{$horario->profesor->nombre}}<br> 
        <a href="{{ route('horario.create') }}" class="btn btn-success">
        <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
        </a></td>
        <td>{{$horario->materia->descripcion}} {{$horario->profesor->apellido}}, {{$horario->profesor->nombre}}<br> 
        <a href="{{ route('horario.create') }}" class="btn btn-success">
        <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
        </a></td>

        <!-- <td>{{$horario->dia }}</td>
        <td>{{$horario->moduloHorario->horainicio}} - {{$horario->moduloHorario->horafin}}</td>
        <td>{{$horario->materia->descripcion}}</td>
        <td>{{$horario->profesor->apellido}}, {{$horario->profesor->nombre}}</td>
        <td>{{$horario->comentario}}</td>
        <td>{{$horario->comision->comision}}</td>
        <td>
            {{ Form::model($horario, [ 'method' => 'delete', 'route' => ['horario.destroy', $horario -> id] ]) }}
            @csrf
            <a href="{{ route('horario.edit', ['horario' =>  1] ) }}" class="btn btn-primary">
                <img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar">
            </a>
            <button type="submit" class="btn btn-danger" onclick="if (!confirm('¿Esta seguro de borrar el horario?')) return false;">
                <img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar">
            </button>
            {!!Form::close()!!}
        </td> -->
    </tr>
    @if($loop->last)
</table>
@endif

@endforeach


@endsection