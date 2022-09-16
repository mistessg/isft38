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

     @forelse($objetivos as $objetivo)
     
     
         {!!$objetivo->objetivo!!}
   @empty
     <p class="text-capitalize">No hay Objetivo cargado.</p>
   @endforelse

   <div style="">
       <a href="{{ route('objetivo.edit', ['objetivo' => $objetivo->id ]) }}" style="color:black;" class="btn btn-warning " >
        <img src="{{ asset('svg/edit.svg') }}" width="20" height="20"  alt="Editar" title="Editar">
        Editar 
      </a>  
    </div>
 </div>

{{--
  {!!substr($novedad->cuerpo, 0, 200)!!}
--}}


@endsection
