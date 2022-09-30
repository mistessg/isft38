@extends('backend.layouts.main')
@section('title', 'Comision')

@section('content')
<style>
  .comision:hover {
    background-color: #3A70FF;
    transition: background-color .5s;
    color: white;
  }

  .texto-tabla {
    font-size: .8em;
  }
</style>
<nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-md">
        <a class="navbar-brand text-white" href="#">Comisiones</a>
      </div>
    </nav>
<br>

  <table class="table texto-tabla mb-0">
    <div class="algo">
      <tr class="text-light text-center mb-0" style="background-color: #3A70FF;">
        <th class="text-left" scope="col"></th>
        <th class="text-left" scope="col">Comision</th>
        <th class="d-flex justify-content-end">
          <a href="{{ route('comision.create') }}" class="btn btn-success">
            <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
          </a>
        </th>
      </tr>
    </div>

    @foreach($comisiones as $comision)
    <tr>
      <td style="background: #F5F5F5;" class="text-center align-middle ps-5">{{$comision->comision}}</td>
      <td>
        {{ Form::model($comision, [ 'method' => 'delete' , 'route' => ['comision.destroy', $comision->id] ]) }}
        @csrf
        <a href="{{ route('comision.edit', ['comision' => $comision->id ]) }}" class="btn btn-primary ">
          <img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar">
        </a>
        <button type="submit" class="btn btn-danger" onclick="if (!confirm('Está seguro de borrar la comisión?')) return false;">
          <img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar">
        </button>
</div>
{!!Form::close()!!}
</tr>
@endforeach
</table>

@endsection