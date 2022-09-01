@extends('backend.layouts.main')
@section('title', 'Materias')
@section('content')
  <h1>Nueva Materia</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  @foreach($materias as $materia)
    {{ $materia }}
@endforeach
@endsection