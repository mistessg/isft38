@extends('frontend.layout.main')
@section('content')

<style>
    .titulo{
        text-align: center;
        color: white;   
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
    
</style>
<div class="titulo">
    <img src="" alt="">
    <h1>Carreras</h1>
</div>
<div class="carreras">

  <div class="row">
  @foreach ($carreras as $carrera)
    <div class="col-lg-4 col-md-12 mb-3 roberto">
      <div class="card shadow-sm">
        <img src="https://i.blogs.es/e1feab/google-fotos/1366_2000.jpg" width="100%" alt="">
          <div class="card-body">
            <h4>{{ $carrera-> descripcion}}</h4>
            <p class="card-text">{{ $carrera-> texto }}</p>
              <div class="d-flex justify-content-between align-items-center">
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