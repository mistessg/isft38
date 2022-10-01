<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/createBack.css')}}">
  <link rel="stylesheet" href="{{ asset('css/backend.css') }}">
  <!--FONTS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- SUMMERNOTE -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <!-- SUMMERNOTE -->
  @yield('scripts')
  <title>@yield('title')</title>
</head>

<body>
  <nav class="nav navbar navbar navbar-expand-lg bg-dark " style="background-color: #F5F5F5; color: white;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="	http://www.isft38.edu.ar/image/logo.png" width="30px" height="50px" alt="" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto">
          @section('menu')
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('sede.index') }}">Sedes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('carrera.index') }}">Carreras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('materia.index') }}">Materias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('comision.index') }}">Comisiones</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('profesor.index') }}">Profesores</a>
          </li>            
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('modulo.index') }}">Módulos</a>
          </li>           
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('horario.index') }}">Horarios</a>
          </li>    
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('programa.index') }}">Programas</a>
          </li>                         
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('historia.index') }}">Historia</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('objetivo.index') }}">Objetivos</a>
          </li>               
           
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('users.index') }}">Usuarios</a>
          </li>

          @show
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown" hidden="hidden">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ __('noticias.idioma-lbl') }}
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="{{ route('noticias.index') }}">{{__('noticias.index')}}
              <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('etiquetas.index') }}">Etiquetas</a>
          </li>

          <!-- Authentication Links -->
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('noticias.login') }}</a>
          </li>
          @endif

          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('noticias.register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                {{ __('noticias.logout') }}
              </a>

              <form id="logout-form text-white" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          @endguest
          @show
        </ul>
      </div>
  </nav>
  @yield('content')
</body>

</html>