@extends('backend.layouts.main')
@section('title', 'Historia')
@section('content')
  <h1>Nueva Historia</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
 {{ Form::open(['route' => 'historia.store']) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group">
          {{ Form::label("historia", 'Historia', ['class' => 'control-label']) }}
          {{ Form::textarea("historia", old("historia"), ["class" => "form-control", "placeholder" => "Ingrese la Historia" ]) }}
          @error('historia')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

    </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button></div>
{!!Form::close()!!}
@endsection
