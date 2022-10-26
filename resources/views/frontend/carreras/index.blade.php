@extends('frontend.layout.main')
@section('content')

<style>

    .titulo{
      margin-top: 100px;
      text-align: center;
      color: white;   
      /* border-top: 3px solid white; */
    }
    .carreras{
        display: flex;
        flex-wrap: wrap;
        margin: 20px;
    }
    .card-text{
      display: flex;
      flex-direction: column;
      text-overflow: ellipsis;
      flex: 1;
      margin: 10px;
      padding:5px;
      text-align: center;
    }
    .card-text p{
      text-align: justify;
    }
    @media (min-width: 1000px){
      .card-text{
        display: flex;
      flex-direction: column;
      text-overflow: ellipsis;
      flex: 1;
      margin: 10px;
      padding:5px;
      text-align: center;
      height: 17rem;
      }
    }
    .btn-group{
      margin-top: 20px;
    }
    
    
    



.botonMateria {
 padding: 17px 40px;
 border-radius: 7px;
 border: 0;
 background-color: white;
 box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
 letter-spacing: 1.5px;
 text-transform: uppercase;
 font-size: 15px;
 transition: all .5s ease;
}

.botonMateria:hover {
 letter-spacing: 3px;
 background-color: #FF4A4A;
 color: hsl(0, 0%, 100%);
 box-shadow: #D61C4E 0px 7px 29px 0px;
}

.botonMateria:active {
 letter-spacing: 3px;
 background-color: hsl(261deg 80% 48%);
 color: hsl(0, 0%, 100%);
 box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
 transform: translateY(10px);
 transition: 100ms;
}

.imagenCarrera{
  width: 100%;
  height: 300px;
  object-fit: cover;
}





   



    /* .cards-texto{
      height: 1000px;
    } */
    /* .roberto{
      height: 850px;
    } */
    
</style>
<div class="titulo">
    <img src="" alt="">
    <h1>Carreras</h1>
</div>
<div class="carreras">

  <div class="row">
  @foreach ($carreras as $carrera)
    <div class="col-lg-6 col-md-12 mb-3 cards-texto">
      <div class="card shadow-sm roberto">
        <img src="{{asset('./storage/'. $carrera->imagen )}}" alt="" class="imagenCarrera">
          <div class="card-body">
          <div class="card-text">
            <h4>{{ $carrera-> descripcion}}</h4>
            <p>{{ $carrera-> texto }}</p></div>
              <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="btn-group">
                  <button id="{{$carrera->descripcion}}" onClick="reply_click(this.id)" type="button" class="botonMateria"data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$carrera->id}}">
                    Materias
                  </button>
                </div>
              </div>
          </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div>
</div>
 
@foreach ($carreras as $carrera)
<div class="modal fade" id="staticBackdrop{{$carrera->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><b> Materias de
        {{$carrera->descripcion}}</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @foreach ($materias as $materia)
        @if($materia->carrera_id == $carrera->id)
          <h2>Materias de {{$materia->anio_id}} año</h1>
          <p style="word-wrap: break-word;font-size:16px;">- {{$materia->descripcion}}.</p>
        @endif
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- <script type="text/javascript">
  function reply_click(clicked_id){
    alert(clicked_id);
  }
</script> -->

@endsection