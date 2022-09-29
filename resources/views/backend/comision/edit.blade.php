@extends('backend.layouts.main')
@section('title', 'Comision')
@section('content')
{{ Form::model($comision, [ 'method' => 'put' , 'route' => ['comision.update', $comision->id],  'files' => true]) }}
@csrf <!-- {{ csrf_field() }} -->
{{ Form::label("comision", __('comision'), ['class' => 'control-label']) }}
        <div>
          {{ Form::label("comision", 'Comision', ['class' => 'control-label']) }}
          {{Form::text("comision", old("comision"), ["class" => "form-control", "placeholder" => "Ingrese la comision", ])}}                        
          @error('comision') <div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>
    <button type="submit"  class="btn ">{{__('Guardar')}}</button>
{!!Form::close()!!}

@endsection