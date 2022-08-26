@extends('frontend.layout.main')
@section('content')
<style>
    form{
            width: 70%;
            margin:50px auto;
            background: rgba( 253, 253, 253, 0 );
            box-shadow: 0 8px 32px 0 rgba(168, 16, 16, 0.37);
            backdrop-filter: blur( 11.5px );
            -webkit-backdrop-filter: blur( 11.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );  
            animation-name:identifier;
            animation-duration:1s;
        }
        .form-control{
            background: transparent;
            border: none;
            border-bottom: 1px solid rgb(175, 34, 34);
            border-radius:0px;

        }
        .form-control::placeholder{
            color: rgb(175, 34, 34);
        }
        form label{
            font-weight: bold;
        }
        .boton{
            text-align: center;
        }
        .boton button{
            background-color: rgb(175, 34, 34);
            color: white;
            text-transform: uppercase;
        }
        /* @keyframes identifier{
            0% {width: 0%;}
            100% {width: 70%;}
        } */
        .form-control:hover {
            background: transparent;
        }
        .form-control:focus{
            border-color:transparent;
            border-bottom:1px solid rgb(175, 34, 34);
            box-shadow: none;
            outline: 0 none;
        }
</style>


    
<form class="card">
        <h5 class="card-header mb-5" style=" background-color: #181818; color: white;">Contacto</h5>
        <div class="card-body">

        <div class="mb-5">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="nombre" class="form-control" placeholder="Escriba su nombre" id="nombre" aria-describedby="emailHelp">
    </div>
    <div class="mb-5">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Escriba su email" aria-describedby="emailHelp">
    </div>
    <div class="mb-5">
        <label for="text" class="form-label">Mensaje</label>
        <input id="text" class="form-control" placeholder="Escriba su mensaje" cols="10" rows="3" />
    </div>
    <div class="boton">
        <button type="submit" class="btn"  >Enviar</button>
    </div>
    </form>
@endsection