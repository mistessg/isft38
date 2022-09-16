<div id="carouselExampleCaptions" class="carousel-slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
   <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  --> <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
</div>

  <div class="carousel-inner">
  @forelse($novedades as $novedad)
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" class="active" aria-current="true" aria-label="Slide {{$loop->index}}"></button>
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
       
        <p>{!!substr($novedad->cuerpo, 0, 200)!!}... <a href="{{route('blog.noticias.leer',$novedad->id)}}" target="_blank">Seguir Leyendo »</a></p>
      </div>
    </div>
    @if($loop->last)  
      <div class="carousel-item">
    @endif  
    @empty
    <div class="carousel-item active">
    @endforelse

      <img src="https://www.diferencias.cc/wp-content/uploads/2021/06/diferencia-entre-facultad-y-universidad.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    </div>
  </div>
</div>
</div>