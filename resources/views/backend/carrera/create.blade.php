@extends('backend.layouts.main')
@section('title', 'Carreras')
@section('content')
  <h1>Nueva Carrera</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  @foreach($carreras as $carrera)
    {{ $carrera }}
@endforeach
@endsection