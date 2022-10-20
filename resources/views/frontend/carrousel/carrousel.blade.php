@extends('frontend.layout.main')
@section('content')

<style>
  /* * {
    overflow-x: hidden;
  } */

  .containerss {
    display: flex;
    flex-direction: column;
    width: 100%;
    padding: 30px;
    margin: 0 auto;
    justify-content: center;
  }

  .titulo h1 {
    text-align: center;
    color: white;
  }

  .texto {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .texto p {
    padding: 30px;
    width: 90%;
    text-align: justify;
    color: #ffffff;
  }

  .card {
    height: 650px;
    display: flex;
    margin: 0 40px;
    text-align: center;
  }

  .card-img-top {
    height: 250px;
  }

  .fondoCards {
    background-color: #212121;
  }

  .card-texto {
    text-align: justify;
    margin: 0 10px;
  }

  .card-link1 {
    position: relative;
    bottom: 20px
  }

  button {
    position: relative;
    display: inline-block;
    cursor: pointer;
    outline: none;
    border: 0;
    vertical-align: middle;
    text-decoration: none;
    background: transparent;
    padding: 0;
    font-size: inherit;
    font-family: inherit;
  }

  button.learn-more {
    width: 12rem;
    height: auto;
  }

  button.learn-more .circle {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: relative;
    display: block;
    margin: 0;
    width: 3rem;
    height: 3rem;
    background: #282936;
    border-radius: 1.625rem;
  }

  button.learn-more .circle .icon {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    background: #fff;
  }

  button.learn-more .circle .icon.arrow {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    left: 0.625rem;
    width: 1.125rem;
    height: 0.125rem;
    background: none;
  }

  .row {
    display: flex;
    justify-content: center;
    padding: 20px;
  }

  button.learn-more .circle .icon.arrow::before {
    position: absolute;
    content: "";
    top: -0.29rem;
    right: 0.0625rem;
    width: 0.625rem;
    height: 0.625rem;
    border-top: 0.125rem solid #fff;
    border-right: 0.125rem solid #fff;
    transform: rotate(45deg);
  }

  button.learn-more .button-text {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 0.75rem 0;
    margin: 0 0 0 1.85rem;
    color: #282936;
    font-weight: 700;
    line-height: 1.6;
    text-align: center;
    text-transform: uppercase;
  }

  button:hover .circle {
    width: 100%;
  }

  button:hover .circle .icon.arrow {
    background: #fff;
    transform: translate(1rem, 0);
  }

  button:hover .button-text {
    color: #fff;
  }

  /* From uiverse.io by @alexmaracinaru */
  .cta {
    border: none;
    background: none;
  }

  .cta span {
    padding-bottom: 7px;
    letter-spacing: 4px;
    font-size: 14px;
    padding-right: 15px;
    text-transform: uppercase;
  }

  .cta svg {
    transform: translateX(-8px);
    transition: all 0.3s ease;
  }

  .cta:hover svg {
    transform: translateX(0);
  }

  .cta:active svg {
    transform: scale(0.9);
  }

  .hover-underline-animation {
    position: relative;
    color: white;
    padding-bottom: 20px;
  }

  .hover-underline-animation:after {
    content: "";
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #000000;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
  }

  .cta:hover .hover-underline-animation:after {
    transform: scaleX(1);
    transform-origin: bottom left;
  }

  #arrow-horizontal {
    fill: white;
  }

  .sesion {
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
    opacity: 0;
    position: fixed;
    top: 0;
    height: 100vh;
    width: 100vw;
    transition: opacity 0.3s ease;
    overflow: auto;
    overflow: scroll;
    z-index: 2;

  }

  .show {
    pointer-events: auto;
    opacity: 1;
  }

  .vent_sesion {
    margin: auto;
    position: relative;
    background-color: rgba(255, 255, 255);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
  }

  .container-historia {
    background-image: url(historia.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
  }

  .container-objetivo {
    background-image: url(objetivo.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
  }

  .container-son {
    word-wrap: break-word;
    width: 600px;
    height: 350px;
    padding: 20px;
    overflow: auto;
  }

  .btn_cerrar {
    position: absolute;
    top: -20px;
    right: -20px;
    z-index: 1;
    border: none;
    cursor: pointer;
  }

  .btn_cerrar svg {
    background: white;
    border-radius: 50px;
  }
</style>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div id="carouselExampleCaptions" class="carousel slide pointer-event" data-bs-ride="carousel">
  <div class="carousel-indicators">
    @forelse($novedades as $novedad)
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide {{$loop->index}}"></button>
    @if($loop->last)
    @php($c1 = $loop->index + 1)
    @php($c2 = $loop->index + 2)
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $c1 }}" class=" " aria-current="true" aria-label="Slide {{$c1}}"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $c2 }}" class=" " aria-current="true" aria-label="Slide {{$c2}}"></button>
    @endif
    @empty
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class=" " aria-current="true" aria-label="Slide 1"></button>
    @endforelse
  </div>
  <div class="carousel-inner">
    @forelse($novedades as $novedad)
    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
      <img src="https://img.freepik.com/vector-premium/fondo-cuadrado-negro-geometrico-relieve_51543-519.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        @if($novedad->imagen)
        @if(Str::startsWith($novedad->imagen, 'http'))
        <img src="{{ $novedad->imagen }}" class="img-fluid img-thumbnail" alt="...">
        @else
        <img src="{{ asset('./storage/'. $novedad->imagen) }}" class="img-fluid img-thumbnail" alt="...">
        @endif
        @endif
        <h5>{{$novedad->titulo}}</h5>
        <p>{!!substr($novedad->cuerpo, 0, 200)!!}...
          <a href="{{route('blog.noticias.leer',$novedad->id)}}" target="_blank">
            <button class="cta">
              <span class="hover-underline-animation"> Saber más </span>
              <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
              </svg>
            </button>
          </a>
        </p>

        @if($novedad->archivo1)
        <a href="{{ asset('./storage/'.$novedad->archivo1) }}" target="_blank">{{ basename($novedad->archivo1) }}</a>
        @endif
        @if($novedad->archivo2)
        <a href="{{ asset('./storage/'. $novedad->archivo2) }}" target="_blank">{{ basename($novedad->archivo2) }}</a>
        @endif
        @if($novedad->archivo3)
        <a href="{{ asset('./storage/'. $novedad->archivo3) }}" target="_blank">{{ basename($novedad->archivo3) }}</a>
        @endif
      </div>
    </div>
    @if($loop->last)
    <div class="carousel-item">
      <img src="https://www.diferencias.cc/wp-content/uploads/2021/06/diferencia-entre-facultad-y-universidad.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Instituto Superior de Formación Técnica N° 38</h5>
        <p>Sede Central San Nicolás</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.unav.edu/documents/29007/29799869/normativa-1200.jpg/" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Carreras</h5>
        <!-- @foreach($carreras as $carrera) 
	 @if($loop->first) 	 <ul>  @endif
        <li><div class="badge bg-dark text-wrap" style="width: 25rem;">{{$carrera->descripcion}}</div></li>
	 @if($loop->last) 	 </ul>  @endif		
     @endforeach		 -->
      </div>
    </div>
    @endif
    @empty
    <div class="carousel-item active">
      <img src="https://www.diferencias.cc/wp-content/uploads/2021/06/diferencia-entre-facultad-y-universidad.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.unav.edu/documents/29007/29799869/normativa-1200.jpg/" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    @endforelse

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="fondoCards">
  <div class="containerss">
    <div class="titulo">
      <h1>Información</h1>
    </div>
    <div class="texto">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum repellat laboriosam sit sint, nam delectus nihil, reiciendis rem fuga hic iste. Debitis, dignissimos! Amet laboriosam quos consequuntur doloribus placeat provident! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum aliquid illo asperiores dolorem rem corporis omnis maiores vitae dolore illum, corrupti quidem molestias, magnam aliquam fuga, ad sint nisi itaque.</p>
    </div>
  </div>




  <div>
    <div class="row" >
      <div class="card col-lg-4 col-md-10 sm-12 mb-3" style=" margin:0%; padding:0% ">
        <img style="margin: 0%; padding:0%;" src="https://i0.wp.com/cms.babbel.news/wp-content/uploads/2022/02/Most_Beautiful_Libraries-1.png?resize=640%2C360" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Historia</h5>
          <hr>
          @foreach($historias as $historia)
          <p class="card-texto">{!!substr($historia->historia, 0, 450)!!}...</p>
          @endforeach
          <hr>
        </div>

        <div class="card-body">
          <button class="learn-more">
            <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
            </span>
            <span class="button-text" id="btn_sesion">Ver más</span>
          </button>
        </div>
      </div>
      <!--CARD 2-->
      <div class="card col-lg-4 col-md-10 sm-12 mb-3 " style=" padding:0% ">
        <img class="card-img-top" src="https://us.123rf.com/450wm/andreypopov/andreypopov1701/andreypopov170100862/69612698-vista-de-%C3%A1ngulo-alto-de-una-persona-que-escribe-nota-en-diario-en-blanco-en-el-escritorio-de-madera.jpg?ver=6" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Objetivos</h5>
          <hr>
          @foreach($objetivos as $objetivo)
          <p class="card-texto">{!!substr($objetivo->objetivo, 0, 546)!!}...</p>
          @endforeach
          <hr>
        </div>

        <div class="card-body">
          <button class="learn-more">
            <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
            </span>
            <span class="button-text" id="btn_sesion2">Ver más</span>
          </button>
        </div>
      </div>
    </div>
  </div>


  <!-- MODALS -->



  <div id="sesion" class="sesion">
    <div class="vent_sesion">

      <div class="container-historia">
        <h1>Historia</h1>
      </div>

      <div class="container-son">
        <div>
          @foreach($historias as $historia)
          <p>{!!$historia->historia!!}</p>
          @endforeach
        </div>
      </div>

      <div class="btn_cerrar" id="btn_cerrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-x-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
      </div>

    </div>
  </div>



  <div id="sesion2" class="sesion">
    <div class="vent_sesion">
      <div class="container-objetivo">
        <h1>Objetivos</h1>
      </div>

      <div class="container-son">
        @foreach($objetivos as $objetivo)
        <p>{!! $objetivo->objetivo !!}</p>
        @endforeach

      </div>

      <div class="btn_cerrar" id="btn_cerrar2">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-x-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
      </div>

    </div>
  </div>


  <script type="text/javascript">
    const btn_sesion = document.getElementById('btn_sesion');
    const btn_sesion2 = document.getElementById('btn_sesion2');
    const sesion = document.getElementById('sesion');
    const sesion2 = document.getElementById('sesion2');
    const btn_cerrar = document.getElementById('btn_cerrar');
    const btn_cerrar2 = document.getElementById('btn_cerrar2');

    btn_sesion.addEventListener('click', () => {
      sesion.classList.add('show');
    });

    btn_cerrar.addEventListener('click', () => {
      sesion.classList.remove('show');
    });

    btn_sesion2.addEventListener('click', () => {
      sesion2.classList.add('show');
    });

    btn_cerrar2.addEventListener('click', () => {
      sesion2.classList.remove('show');
    });
  </script>

  @endsection