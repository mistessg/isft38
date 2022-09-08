
@extends('frontend.layout.main')
@section('content')

<style>

.containerss{
    display: flex;
    flex-direction: column;
    width: 70%;
    padding: 30px;
    margin: 0 auto;
}
.titulo h1{
    text-align: center;
}
.texto p{
  padding:30px;
}
.card-img-top{
  height: 200px;
}
.fondoCards{
  background-color: lightcyan;
  padding: 20px;
}


</style>


<div id="carouselExampleCaptions" class="carousel slide todo" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  @forelse($novedades as $novedad)
  @if($loop->first)  
  <div class="carousel-item active">
  @else
  <div class="carousel-item">
  @endif
      <img src="https://img.freepik.com/vector-premium/fondo-cuadrado-negro-geometrico-relieve_51543-519.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>{{$novedad->titulo}}</h5>
        @if($novedad->imagen)
            @if(Str::startsWith($novedad->imagen, 'http'))
              <img src="{{ $novedad->imagen }}" class="img-fluid img-thumbnail" alt="...">
            @else
              <img src="{{ asset('./storage/'. $novedad->imagen) }}" class="img-fluid img-thumbnail" alt="...">  
            @endif
         @endif      
       
        <p>{!!substr($novedad->cuerpo, 0, 300)!!}... <a href="{{route('blog.noticias.leer',$novedad->id)}}" target="_blank">Seguir Leyendo »</a></p>
      </div>
    </div>
    <div class="carousel-item">
    @empty
    <div class="carousel-item active">
    @endforelse
    
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
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/imagen3.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black;">ISFT</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
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
    <div class="texto" >
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum repellat laboriosam sit sint, nam delectus nihil, reiciendis rem fuga hic iste. Debitis, dignissimos! Amet laboriosam quos consequuntur doloribus placeat provident! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum aliquid illo asperiores dolorem rem corporis omnis maiores vitae dolore illum, corrupti quidem molestias, magnam aliquam fuga, ad sint nisi itaque.</p>
    </div>
  </div>



  <div class="carditas">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="http://www.corneliadelange.es/wp-content/uploads/2018/01/objetivo-congresos.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Objetivos</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Titulo</li>
        <li class="list-group-item">Subtitulo</li>
        <li class="list-group-item">Texto</li>
      </ul>
      <div class="card-body">
        <a href="#" class="card-link">Card link</a>
      </div>
    </div>
  <!--CARD 2-->
    <div class="card" style="width: 18rem; ">
      <img class="card-img-top" src="https://images.vexels.com/media/users/3/188413/isolated/preview/bd351f1048225a84afdb2575d4a6e8fd-icono-de-historia-de-materia-escolar-de-lapiz-de-color.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Historia</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Titulo</li>
        <li class="list-group-item">Subtitulo</li>
        <li class="list-group-item">Texto</li>
      </ul>
      <div class="card-body">
        <a href="#" class="card-link">Card link</a>
      </div>
    </div>
  </div>
</div>


@endsection