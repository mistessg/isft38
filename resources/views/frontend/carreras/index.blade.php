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
      height: 370px;
      text-overflow: ellipsis;
    }
    .btn-group{
      margin-top: 20px;
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
    <div class="col-lg-4 col-md-12 mb-3 cards-texto">
      <div class="card shadow-sm roberto">
        <img src="https://i.blogs.es/e1feab/google-fotos/1366_2000.jpg" width="100%" alt="">
          <div class="card-body">
          <div class="card-text">
            <h4>{{ $carrera-> descripcion}}</h4>
            <p>{{ $carrera-> texto }}</p></div>
              <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
              </div>
          </div>
      </div>
    </div>
    @endforeach
  </div>
    
    
</div>
@endsection
