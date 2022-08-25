@extends('backend.layouts.main')

@section('title', 'Horarios por Carreras')

@section('content')
    <div class="container my-4">
    
        <div class="card">
            <h5 class="card-header" style="background-color: #181818; color: white;">Horarios por Profesor</h5>
        <div class="card-body">

        <form>
            
            

            <div class="input-group input-group-sm mt-2">
            <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
            <input type="text" id="apellido" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>

            <select class="form-select my-4" size="10"  aria-label="multiple select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </form>


        <div class="d-grid gap-2">
          <button class="btn btn-outline-dark" type="submit" aria-label="consultar">Consultar</button>
        </div>

    </div>
@endsection