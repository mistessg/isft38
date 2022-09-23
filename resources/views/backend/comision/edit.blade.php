@extends('backend.layouts.main')
@section('title', 'Comision')
@section('content')
{{ Form::model($comision, [ 'method' => 'put' , 'route' => ['comision.update', $comision->id],  'files' => true]) }}
{{ Form::label("comision", __('comision'), ['class' => 'control-label']) }}
          {{Form::text("comision", old("descripcion"), ["class" => "form-control", "placeholder" => "Ingrese años", ])}}     
          @error('comision')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror             
    <br>
    <button type="submit"  class="btn ">{{__('Guardar')}}</button>
{!!Form::close()!!}

@endsection