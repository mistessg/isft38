@extends('backend.layouts.main')
@section('title', 'Comision')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
<h1 class="bg-blue-500">CREATE</h1>

 {{ Form::open(['route' => 'comision.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
  

  {{ Form::model($comision, [ 'method' => 'create' , 'route' => ['comision.create', $comision->id] ]) }}
  <div class="form-group">
          {{ Form::label("comision", __('Comision'), ['class' => 'control-label']) }}
          {{Form::text("comision", old("comision"), ["class" => "form-control", "placeholder" => "Ingrese una comision", ])}}     
          @error('comision')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <button type="submit"  class="btn btn-success btn-block container-fluid p-3">{{__('Guardar')}}</button>
  {{!!Form::close()!!}}

@endsection