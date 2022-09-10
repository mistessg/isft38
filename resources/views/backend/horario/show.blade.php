@extends('backend.layouts.main')
@section('title', 'Carreras')
@section('content')

{{ Form::open(['route' => 'horario.createHorario']) }}
<div class="container">   
<div class="input-group mt-5 mb-3">
    <label class="input-group-text" for="#">Sede</label>
    {{Form::text("sede", $sede->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}

</div>

<div class="input-group mb-3">
    <label class="input-group-text" for="#">Carrera</label>
    {{Form::text("carrera", $carrera->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}

</div>
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Año</label>
    {{Form::text("anio_id", $anio->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("anio_id", $anio->id , ["class" => "form-control", "hidden" ])}}

</div>
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Comision</label>
    {{Form::text("comision_id", $comision->comision , ["class" => "form-control", "readonly" ])}}
    {{Form::text("comision_id", $comision->id , ["class" => "form-control", "hidden" ])}}

</div>
</div>
<div class="container">   
<!--<button type="submit" style="width: 20%; float:right;" class="btn btn-primary">Crear horario</button></div>-->
</div>
{!!Form::close()!!}

<br><br>

 
<table class="table table-dark">
    <tr>
        <th class="text-left" scope="col">HORARIO</th>
        @foreach($dias as $dia)
        <th class="text-left" scope="col">{{$dia}}</th>
        @endforeach
     </tr>
   
     @foreach($modulosHorarios as $modulosHorario)
         <tr><td>{{$modulosHorario->horainicio}} a {{$modulosHorario->horafin}}
     @foreach($dias as $index=>$dia)
     <td>
     @php ($a = 0)  
     @foreach($horarios as $horario)
 
     @if($horario->dia == $index && $horario->moduloHorario->id == $modulosHorario->id )
     @php ($a++)       
     <strong>{{$horario->materia->descripcion}}</strong>  
     <br> {{$horario->profesor->apellido}}, {{$horario->profesor->nombre}} 
     <br> {{$horario->comentario}}
        {{ Form::model($horario, [ 'method' => 'delete', 'route' => ['horario.destroy', $horario -> id] ]) }}
            @csrf
            <a href="{{ route('horario.edit', ['horario' =>  1] ) }}" class="btn btn-primary">
                <img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar">
            </a>
            <button type="submit" class="btn btn-danger" onclick="if (!confirm('¿Esta seguro de borrar el horario?')) return false;">
                <img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar">
            </button>
            {!!Form::close()!!}
    
     @endif 
      @endforeach
      @if($a == 0)
     @php ($a++)  
  
        {{ Form::open(['route' => 'horario.createHorario']) }}
    
    {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("anio_id", $anio->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("comision_id", $comision->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("modulohorario_id", $modulosHorario->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("dia", $index , ["class" => "form-control", "hidden" ])}}
<button type="submit" class="btn btn-success"><img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear"></button></div>
{!!Form::close()!!}

        @endif 
     </td>
    @endforeach
    </tr>
@endforeach 
      
    <tr>

       
@if(1==2)
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
        </td>  
    </tr>
@endif
</table>
<!-- {{ Form::open(['route' => 'horario.store']) }}
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
        <td>Dia</td>
        <td>Modulo</td>
        <td>Materia</td>
        <td>Profesor</td>
        <td>Comentario</td>
        <td>Comision</td>
        <td>
            <a href="{{ route('horario.create') }}" class="btn btn-success">
                <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
            </a>
        </td>
    </tr>
    @endif
    <tr>
        <td>{{$horario->dia }}</td>
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
        </td>
    </tr>
    @if($loop->last)
</table>
@endif

@endforeach -->

@endsection