@extends('backend.layouts.main')
@section('title', 'Historia')
@section('content')
  <h1>Historia</h1>
  <div class="links">
   {{ Form::model($historia, [ 'method' => 'get' , 'route' => ['historia.show', $historia->id]]) }}
   <div class="form-group">
          {{ Form::label("historia", 'Historia', ['class' => 'control-label']) }}
          {{ Form::textarea("historia", old("historia"), ["class" => "form-control", "placeholder" => "Ingrese la Historia" , "readonly" ]) }}
          @error('historia')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

{!!Form::close()!!}
@endsection
