@extends('backend.layouts.main')

@section('title', 'Módulo horario')

@section('content')
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-md">
        <a class="navbar-brand text-white" href="#">Crear módulos horarios</a>
    </div>
</nav>
<br>
<table class="table m-o">
    <tr class="text-light" style="background-color: #3A70FF;">
        <td class="align-middle ps-5">Hora de inicio</td>
        <td class="align-middle">Hora de finalización</td>
        <td class="align-middle">Duración en minutos</td>
        <td class="d-flex justify-content-end">
            <a href="{{ route('modulo.create') }}" class="btn btn-success">
                <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
            </a>
        </td>
    </tr>
    
    @forelse($modulos as $modulo)
    <tr>
        <td class="align-middle ps-5">{{ $modulo->horainicio}}</td>
        <td class="align-middle">{{ $modulo->horafin}}</td>
        <td class="align-middle">{{ $modulo->duracion}}</td>
        <td class="d-flex justify-content-end">
            {{ Form::model($modulos, [ 'method' => 'delete', 'route' => ['modulo.destroy', $modulo -> id] ]) }}
            @csrf
            <a href="{{ route('modulo.edit', ['modulo' => $modulo->id ] ) }}" class="btn btn-primary">
                <img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar">
            </a>
            <button type="submit" class="btn btn-danger" onclick="if (!confirm('¿Esta seguro de borrar el módulo?')) return false;">
                <img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar">
            </button>
            {!!Form::close()!!}
        </td>
    </tr>
    @if($loop->last)
</table>

@endif
@empty
@endforelse
</div>

@endsection