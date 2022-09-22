@extends('backend.layouts.main')
@section('title', 'Historia')
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
            <a href="{{ route('historia.create')}}" style="color:black;" class="btn btn-success" >
              <img src="{{ asset('svg/new.svg') }}"  width="20" height="20"  alt="crear" title="crear">
              Crear Historia
            </a>  
          </div>

     @forelse($historias as $historia)

     {{ Form::model($historia, [ 'method' => 'delete' , 'route' => ['historia.destroy', $historia->id] ]) }}
            @csrf

            <div style="padding:20px;">
              <button style="float:right;" type="submit" name="borrar{{$historia->id}}"  class="btn btn-danger " onclick="if (!confirm('Está seguro de borrar la carrera?')) return false;">
                <img src="{{ asset('svg/delete.svg') }}" width="20" height="20"  alt="Borrar" title="Borrar">
                Borrar
              </button>

              <div style="float:right;">
                <a href="{{ route('historia.edit', ['historium' => $historia->id ]) }}" style="color:black;" class="btn btn-warning " >
                  <img src="{{ asset('svg/edit.svg') }}"  width="20" height="20"  alt="Editar" title="Editar">
                  Editar 
                </a>  
              </div>
            </div>

            {!!Form::close()!!}  
          <div style="width:600px;margin:auto;padding:20px 0;text-align:justify;">
            {!!$historia->historia!!}
          </div>
         <hr>

   @empty
     <p class="text-capitalize">No hay Historia cargada.</p>
   @endforelse
 </div>
@endsection
