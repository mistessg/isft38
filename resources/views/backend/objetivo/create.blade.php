@extends('backend.layouts.main')
@section('title', 'Objetivo')
@section('content')

<style>
    .Inicio{
        text-align: center;
        margin:20px;
        font-family: 'Quicksand', sans-serif;
        font-weight: 800;
    }
    .links{
        padding:25px;
        width: 70%;
        margin: 0 auto;
    }
    .form-group{
        margin-top:10px;
    }
    .form-group label{
        outline: none;
        margin-bottom: 5px;
        font-family: 'Quicksand', sans-serif;
        font-weight: 800;
        font-size: 20px;
        
    }
    .form-control{
        border: 1px solid gray;
        padding:10px;
        outline: none;
    }
  </style>


<div class="Inicio">
  <h1 class="TextoInicio">Nuevo Objetivo</h1>
</div>

  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
 {{ Form::open(['route' => 'objetivo.store']) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group">
          {{ Form::label("objetivo1", 'Objetivos generales', ['class' => 'control-label']) }}
          {{ Form::text("objetivo1", old("objetivo1"), ["class" => "form-control", "placeholder" => "Ingrese el Objetivo" ]) }}
          @error('objetivo')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

    <div class="form-group">  
          {{ Form::label("objetivo2", 'Objetivos de la carreras', ['class' => 'control-label']) }}
          {{ Form::text("objetivo2", old("objetivo2"), ["class" => "form-control", "placeholder" => "Ingrese el Objetivo" ]) }}
          @error('objetivo')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

    <div class="form-group">  
          {{ Form::label("objetivo3", 'Objetivos institucionales', ['class' => 'control-label']) }}
          {{ Form::text("objetivo3", old("objetivo3 "), ["class" => "form-control", "placeholder" => "Ingrese el Objetivo" ]) }}
          @error('objetivo')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>

    </br>
    <button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button></div>
{!!Form::close()!!}
@endsection
