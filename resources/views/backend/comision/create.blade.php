@extends('backend.layouts.main')
@section('title', 'Comision')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
<h1 class="bg-blue-500">CREATE</h1>

 {{ Form::open(['route' => 'comision.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
  

  {{Form::Label("id", $sedes, null, ["class" => "form-control", "placeholder" => "Seleccione la sedes" ]) }}
{!!Form::close()!!}
@endsection