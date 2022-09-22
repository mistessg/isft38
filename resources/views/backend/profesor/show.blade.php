@extends('backend.layouts.main')
@section('title', 'Carreras')
@section('content')

@forelse($horarios as $horario)
    @if($loop->first)
        <table class="table table-dark">
            <tr>
                 <td>Nombre</td>
                 <td>Apellido</td>
                 <td>
                    <a href="{{ route('users.create') }}" class="btn btn-success">
                        <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
                    </a>
                </td>
            </tr>
    @endif
            <tr>
                <td></td>
                <td></td>
                <td>
                    {{ Form::model($profesor, [ 'method' => 'delete', 'route' => ['profesor.destroy', $profesor -> id] ]) }}
                    @csrf
                    <a href="{{ route('profesor.show', ['profesor' => $profesor->id ] ) }}" class="btn btn-info">
                        <img src="{{ asset('svg/show.svg') }}" width="20" height="20" alt="Mostrar" title="Mostrar">
                    </a>
                    <a href="{{ route('profesor.edit', ['user' => $user -> id ] ) }}" class="btn btn-primary">
                        <img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar">
                    </a>
                    <button type="submit" class="btn btn-danger" onclick="if (!confirm('¿Esta seguro de borrar la etiqueta?')) return false;">
                        <img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar">
                    </button>
                    {!!Form::close()!!}
                </td>
            </tr>
     @if($loop->last)
        </table>

    @endif
    </div>

@endsection
