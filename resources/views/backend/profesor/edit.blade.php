@extends('backend.layouts.main')
@section('title', 'Profesores')
@section('content')
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">

  

{{ Form::model($profesor, [ 'method' => 'put' , 'route' => ['profesor.update', $profesor->id],  'files' => true]) }}

  @csrf <!-- {{ csrf_field() }} -->

  <div class="form-group row">
    <div class="col-sm-10">
        {{ Form::label("nombre", 'Nombre', ['class' => 'control-label']) }}
        {{ Form::text("nombre", old("nombre"), ["class" => "form-control", "placeholder" => "", 
    ])}}
        @error('nombre')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
        {{ Form::label("apellido", 'Apellido', ['class' => 'control-label']) }}
        {{ Form::text("apellido", old("apellido"), ["class" => "form-control", "placeholder" => "", 
    ])}}
        @error('apellido')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        </div>
    </div>
  
    </div>

    </br><button type="submit" style="width: 83%;" class="btn btn-primary">Guardar cambios</button>
</div>
{!!Form::close()!!}
@endsection