@extends('backend.layouts.main')
@section('title', 'Objetivo')
@section('content')
  <h1>Objetivo</h1>
  <div class="links">
   {{ Form::model($objetivo, [ 'method' => 'get' , 'route' => ['objetivo.show', $objetivo->id]]) }}
   <div class="form-group">
          {{ Form::label("objetivo", 'Objetivo', ['class' => 'control-label']) }}
          {{ Form::textarea("objetivo", old("objetivo"), ["class" => "form-control", "placeholder" => "Ingrese el Objetivo" , "readonly" ]) }}
          @error('objetivo')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

{!!Form::close()!!}
@endsection
