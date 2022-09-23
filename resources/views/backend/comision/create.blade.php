@extends('backend.layouts.main')
@section('title', 'Comision')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
<h1 class="bg-blue-500">CREATE</h1>

 {{ Form::open(['route' => 'comision.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
  <div class="form-group">
          {{ Form::label("comision", __('comision'), ['class' => 'control-label']) }}
          {{Form::text("comision", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese la nueva comision", ])}}    
          @error('descripcion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

    </br>
    <button type="submit"  class="btn ">{{__('Guardar')}}</button>
  {!!Form::close()!!}

@endsection