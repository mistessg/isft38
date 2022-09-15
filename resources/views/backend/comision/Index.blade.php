@extends('backend.layouts.main')
@section('title', 'Comision')

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

<button>Crear</button>
<Table>
    <tr>
        <td>Id</td>
        <td>Comision</td>
        <td></td>
        <td></td>
    </tr>    
@foreach($comisiones as $comision)    
    <tr>
        <td>{{$comision->id}}</td>
        <td>{{$comision->comision}}</td>
        <td><button>Editar</button></td>
        <td><button>Eliminar</button></td>
    </tr>
@endforeach
</Table>
@endsection