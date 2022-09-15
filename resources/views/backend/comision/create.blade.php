@extends('backend.layouts.main')
@section('title', 'Comision')

@section('content')
  
 {{ Form::open(['route' => 'comision.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
  {{Form::Label("id", $sedes, null, ["class" => "form-control", "placeholder" => "Seleccione la sedes" ]) }}
{!!Form::close()!!}
@endsection