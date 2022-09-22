@extends('frontend.layout.main')
@section('content')

<style>
.containerss{
    display: flex;
    flex-direction: column;
    width: 100%;
    padding: 30px;
    margin: 0 auto;
    justify-content: center;
}
.titulo h1{
    text-align: center;
    color: white;
}
.texto{
  display: flex;
  justify-content: center;
}
.texto p {
  padding:30px;
  width: 90%;
  text-align: justify;
  color: #ffffff;
}
.card {
  height: 600px;
  display: flex;
  margin:0 10px;
  text-align: center;
}
.card-img-top {
  height: 220px;
}
.fondoCards {
  background-color: #212121;
  padding-bottom: 80px;
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
    <p>{!!substr($novedad->cuerpo, 0, 200)!!}... <a href="{{route('blog.noticias.leer',$novedad->id)}}" target="_blank">Seguir Leyendo »</a></p>
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
	 @foreach($carreras as $carrera) 
	 @if($loop->first) 	 <ul>  @endif
        <li><div class="badge bg-dark text-wrap" style="width: 25rem;">{{$carrera->descripcion}}</div></li>
	 @if($loop->last) 	 </ul>  @endif		
     @endforeach		
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
    <div class="texto" >
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum repellat laboriosam sit sint, nam delectus nihil, reiciendis rem fuga hic iste. Debitis, dignissimos! Amet laboriosam quos consequuntur doloribus placeat provident! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum aliquid illo asperiores dolorem rem corporis omnis maiores vitae dolore illum, corrupti quidem molestias, magnam aliquam fuga, ad sint nisi itaque.</p>
    </div>
  </div>



  <div class="carditas ">
    <div class="card" style="width: 25rem;">
      <img class="card-img-top" src="https://i0.wp.com/cms.babbel.news/wp-content/uploads/2022/02/Most_Beautiful_Libraries-1.png?resize=640%2C360" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Historia</h5>
		@foreach($historias as $historia) 
		<p class="card-text">{!!substr($historia->historia, 0, 500)!!}...</p>		
		@endforeach	
	</div>
      <!--<ul class="list-group list-group-flush">
        <li class="list-group-item">Titulo</li>
        <li class="list-group-item">Subtitulo</li>
        <li class="list-group-item">Texto</li>
      </ul>-->
      <div class="card-body">
        <a href="#" class="card-link">Seguir Leyendo »</a>
      </div>
    </div>
  <!--CARD 2-->
    <div class="card" style="width: 25rem;">
      <img class="card-img-top"  src="https://us.123rf.com/450wm/andreypopov/andreypopov1701/andreypopov170100862/69612698-vista-de-%C3%A1ngulo-alto-de-una-persona-que-escribe-nota-en-diario-en-blanco-en-el-escritorio-de-madera.jpg?ver=6" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Objetivos</h5>
		@foreach($objetivos as $objetivo) 
		<p class="card-text">{!!substr($objetivo->objetivo, 0, 448)!!}...</p>		
		@endforeach	
      </div>
      <!--<ul class="list-group list-group-flush">
        <li class="list-group-item">Titulo</li>
        <li class="list-group-item">Subtitulo</li>
        <li class="list-group-item">Texto</li>
      </ul>-->
      <div class="card-body">
        <a href="#" class="card-link">Seguir Leyendo »</a>
      </div>
    </div>
  </div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection