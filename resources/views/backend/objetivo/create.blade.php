@extends('backend.layouts.main')
@section('title', 'Objetivo')
@section('content')
  <h1>Nuevo Objetivo</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
 {{ Form::open(['route' => 'objetivo.store']) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group">
          {{ Form::label("objetivo", 'Objetivo', ['class' => 'control-label']) }}
          {{ Form::textarea("objetivo", old("objetivo"), ["class" => "form-control", "placeholder" => "Ingrese el Objetivo" ]) }}
          @error('objetivo')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

    </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button></div>
{!!Form::close()!!}
@endsection
