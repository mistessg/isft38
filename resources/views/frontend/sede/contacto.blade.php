@extends('frontend.layout.main')
@section('content')
<style>
    form{
            width: 70%;
            margin:50px auto;
            background: rgba( 253, 253, 253, 0 );
            box-shadow: 0 4px 20px 0 rgba(168, 16, 16, 0.37);
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
<!-- <h1 style="text-align:center;margin:40px 0px; font-weight:bold;color: rgb(175, 34, 34);">CONTACTO</h1> -->
<form>
    <div class="card">
        <p class="card-header" style=" background-color:black;margin:0;text-align:center;font-weight:bold;color: white;font-size:1.2em;">CONTACTO</p>
    <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="nombre" class="form-control" placeholder="Escriba su nombre" id="nombre" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Escriba su email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Mensaje</label>
        <input id="text" class="form-control" placeholder="Escriba su mensaje" cols="10" rows="3" />
    </div>
    <div class="boton">
        <button type="submit" class="btn"  >Enviar</button>
    </div>
    </div>
</form>
@endsection