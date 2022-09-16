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
  margin-left: 7px;
}
button{
  margin-left: 7px;
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
.contenedor{
    margin:auto;
}

</style>

<div class="contenedor">
<Table>
<div class="algo">   
    <tr class="subconainer">
        <td>Id</td>
        <td>Comision</td>
        
        <td></td>
    </tr>         
</div>

@foreach($comisiones as $comision)    
    <tr>
        <td>{{$comision->id}}</td>
        <td>{{$comision->comision}}</td>
        <td>
          {{ Form::model($comision, [ 'method' => 'delete' , 'route' => ['comision.destroy', $comision->id] ]) }}
            @csrf  
          <div class="botonera">
              <button type="submit" name="borrar{{$comision->id}}" class="btn btn-danger  svg" onclick="if (!confirm('Está seguro de borrar la carrera?')) return false;">
                <img src="{{ asset('svg/delete.svg') }}" width="20" height="20"  alt="Borrar" title="Borrar">
              </button>

            <button href="{{ route('comision.edit', ['comision' => $comision->id ]) }}" class="btn btn-primary svg " >
              <img src="{{ asset('svg/edit.svg') }}"  width="20" height="20"  alt="Editar" title="Editar">
            </button>
          </div>
            {!!Form::close()!!}  
    </tr>
@endforeach
</Table>

</div>
@endsection