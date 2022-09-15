@extends('backend.layouts.main')
@section('title', 'Carreras')
@section('content')

<h1>Create</h1>

{{ Form::open(['route' => 'comision.store', 'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
  <div class="form-group">
          {{ Form::label("comision", __('DESCRIPCIÓN'), ['class' => 'control-label']) }}
          {{Form::text("comision", old("comision"), ["class" => "form-control", "placeholder" => "Ingrese la descripcion", ])}}     
          @error('comision')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror                          
    </div>
    <button type="submit"  class="btn btn-success btn-block container-fluid p-3">{{__('Guardar')}}</button>
{!!Form::close()!!}
@endsection