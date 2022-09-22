@extends('backend.layouts.main')
@section('title', 'Objetivo')
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
  border-radius:25px;
  padding: 10px;
}
.svg{
  padding: 15px;
  border-radius:70px;
}
.botonera{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 300px;
}


</style>
          <div style="float:left;padding:20px;">
            <a href="{{ route('objetivo.create')}}" style="color:black;" class="btn btn-success" >
              <img src="{{ asset('svg/new.svg') }}"  width="20" height="20"  alt="crear" title="crear">
              Crear Objetivo
            </a>  
          </div>
     @forelse($objetivos as $objetivo)
    
     {{ Form::model($objetivo, [ 'method' => 'delete' , 'route' => ['objetivo.destroy', $objetivo->id] ]) }}
            @csrf

            <div style="padding:20px;">
              <button style="float:right;" type="submit" name="borrar{{$objetivo->id}}"  class="btn btn-danger " onclick="if (!confirm('Está seguro de borrar la carrera?')) return false;">
                <img src="{{ asset('svg/delete.svg') }}" width="20" height="20"  alt="Borrar" title="Borrar">
                Borrar
              </button>

              <div style="float:right;">
                <a href="{{ route('objetivo.edit', ['objetivo' => $objetivo->id ]) }}" style="color:black;" class="btn btn-warning " >
                  <img src="{{ asset('svg/edit.svg') }}"  width="20" height="20"  alt="Editar" title="Editar">
                  Editar 
                </a>  
              </div>
            </div>

            {!!Form::close()!!}  

            <div style="width:600px;margin:auto;padding:20px 0;text-align:justify;">
              {!!$objetivo->objetivo!!}
            </div>
            <hr>
   @empty
     <p class="text-capitalize">No hay Objetivo cargado.</p>
   @endforelse

   
 </div>

{{--
  {!!substr($novedad->cuerpo, 0, 200)!!}
--}}


@endsection
