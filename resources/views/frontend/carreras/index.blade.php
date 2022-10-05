@extends('frontend.layout.main')
@section('content')

<style>
    .titulo{
        text-align: center;
        color: white;   
    }
    .materias{
        display: flex;
        flex-wrap: wrap;
        margin: 20px;
    }
    .gigante{
        width: 30vw;
        margin-top: 10px;
        flex-direction: row;
        margin: 10px;
    }
</style>
<div class="titulo">
    <img src="" alt="">
    <h1>Carreras</h1>
</div>
<div class="materias">
    <div class="row">
    <div class="col-lg-4 col-md-12 mb-3">
          <div class="card shadow-sm">
            <img src="https://i.blogs.es/e1feab/google-fotos/1366_2000.jpg" width="100%" alt="">
            <div class="card-body">
                <h4>titulo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
    </div>

    <div class="col-lg-4 col-md-12 mb-3">
          <div class="card shadow-sm">
            <img src="https://i.blogs.es/e1feab/google-fotos/1366_2000.jpg" width="100%" alt="">
            <div class="card-body">
            <h4>titulo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
    </div>

    <div class="col-lg-4 col-md-12 mb-3">
          <div class="card shadow-sm">
            <img src="https://i.blogs.es/e1feab/google-fotos/1366_2000.jpg" width="100%" alt="">
            <div class="card-body">
            <h4>titulo</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
    </div>
    </div>
    
    
</div>
@endsection