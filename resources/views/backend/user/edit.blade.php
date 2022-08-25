@extends('backend.layouts.main')
@section('title', 'Usuarios')
@section('content')
  <h1>Editar Usuario</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
{{ Form::model($user, [ 'method' => 'put' , 'route' => ['users.update', $user->id],  'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
     <div class="form-group">
          {{ Form::label("name", 'Nombre', ['class' => 'control-label']) }}
          {{Form::text("name", old("name"), ["class" => "form-control", "placeholder" => "Ingrese el nombre", ])}}                        
          @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group">
          {{ Form::label("email", 'Email', ['class' => 'control-label']) }}
          {{Form::text("email", old("email"), ["class" => "form-control", "placeholder" => "Ingrese el email", ])}}                        
          @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>    
    <div class="form-group">
          {{ Form::label("password", 'Password', ['class' => 'control-label']) }}
          {{Form::password("password", ["class" => "form-control",  "placeholder" => "Ingrese el password"])}}                        
          @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>     
    <div class="form-group">
          {{ Form::label("password-confirm", 'Confirm Password', ['class' => 'control-label']) }}
          {{Form::password("password_confirmation", ["class" => "form-control", "placeholder" => "Confirme el password", ])}}                        
          @error('password-confirm')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>     
 </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button>    
    </div>
{!!Form::close()!!}
@endsection