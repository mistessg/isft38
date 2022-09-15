@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')
@section('content')

{{ Form::open(['route' => 'horario.createHorario']) }}
<div class="">   
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
    <label class="input-group-text" for="#">Comisión</label>
    {{Form::text("comision_id", $comision->comision , ["class" => "form-control", "readonly" ])}}
    {{Form::text("comision_id", $comision->id , ["class" => "form-control", "hidden" ])}}

</div>

<div class="container">   
<!--<button type="submit" style="width: 20%; float:right;" class="btn btn-primary">Crear horario</button></div>-->
</div>
{!!Form::close()!!}

<br><br>

 
<table class="table">
    <tr class="bg-info text-dark">
        <th class="text-left" scope="col">HORARIO</th>
        @foreach($dias as $dia)
        <th class="text-left" scope="col">{{$dia}}</th>
        @endforeach
    </tr>
   
     @foreach($modulosHorarios as $modulosHorario)
    <tr><td class="" style="background: #F5F5F5;">{{$modulosHorario->horainicio}} a {{$modulosHorario->horafin}}
     @foreach($dias as $index=>$dia)
    <td style="background: #F5F5F5;" class="">
     @php ($a = 0)  
     @foreach($horarios as $horario)
 
     @if($horario->dia == $index && $horario->moduloHorario->id == $modulosHorario->id )
     @php ($a++)   
    <div class="text-center p-1 hover-horarios">    
    <strong class="h6 mb-1">{{$horario->materia->descripcion}}</strong>  
    <p class="mb-3">{{$horario->profesor->apellido}}, {{$horario->profesor->nombre}} </p>
    <p class="mb-3">{{$horario->comentario}}</p>
    </div>
     @endif 
      @endforeach
      @if($a == 0)
     @php ($a++)  
        <div class="text-center px-5 m-auto">  
        <p class="align-middle px-auto">{{ Form::open(['route' => 'horario.createHorario']) }}</p>
        </div>
    {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("anio_id", $anio->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("comision_id", $comision->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("modulohorario_id", $modulosHorario->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("dia", $index , ["class" => "form-control", "hidden" ])}}
{!!Form::close()!!}

        @endif 
     </td>
    @endforeach
    </tr>
@endforeach 
      
    <tr>

 
</table>
<p>Estos horarios podrían no ser los oficiales actuales del Instituto. En caso de duda pregunte al preceptor correspondiente a la carrera.</p>
@endsection

</div>
