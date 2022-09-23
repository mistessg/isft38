@extends('backend.layouts.main')
@section('title', 'Profesores')
@section('content')

@forelse($profesores as $profesor)
    @if($loop->first)
        <table class="table table-dark">
            <tr>
                 <td>Nombre</td>
                 <td>Apellido</td>
                 <td>
                    <a href="{{ route('profesor.create') }}" class="btn btn-success">
                        <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
                    </a>
                </td>
            </tr>
    @endif
            <tr>
                <td>{{ $profesor->nombre}}</td>
                <td>{{ $profesor->apellido}}</td>
                <td>
                {{ Form::model($profesores, [ 'method' => 'delete', 'route' => ['profesor.destroy', $profesor -> id] ]) }}
                    @csrf
                    <a href="{{ route('profesor.edit', ['profesor' => $profesor->id ] ) }}" class="btn btn-primary">
                        <img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar">
                    </a>
                    <button type="submit" class="btn btn-danger" onclick="if (!confirm('¿Esta seguro de borrar el profesor?')) return false;">
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
