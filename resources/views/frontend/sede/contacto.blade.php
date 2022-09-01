@extends('frontend.layout.main')
@section('content')
<style>
    /* form{
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
        } */
        .form-control{
            background: transparent;
            border: none;
            /* border-bottom: 1px solid rgb(175, 34, 34); */
            border-bottom: 1px solid black;
            border-radius:0px;
        }
        .form-control::placeholder{
            /* color: rgb(175, 34, 34); */
            color: grey;
        }
        form label{
            font-weight: bold;
        }
        .boton{
            text-align: center;
        }
        .boton button{
            /* background-color: rgb(175, 34, 34); */
            background-color: black;
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
    
<!-- <form class="card">
        <h5 class="card-header " style=" background-color: #181818; color: white;">CONTACTO</h5>
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
        <input type="email" class="form-control" id="email" placeholder="Escriba su mensaje" aria-describedby="emailHelp">
    </div>
</form> -->
<!-- <h1 style="text-align:center;margin:40px 0px; font-weight:bold;color: rgb(175, 34, 34);">CONTACTO</h1> -->
<!-- El miércoles vemos estos ejemplos - Gisela -->
<!-- <a href="https://preview.colorlib.com/theme/bootstrap/contact-form-06/">https://preview.colorlib.com/theme/bootstrap/contact-form-06/</a><br>
<a href="http://isft38.edu.ar/index.php?page=contactenos">http://isft38.edu.ar/index.php?page=contactenos</a>
<a href="https://www.jose-aguilar.com/scripts/jquery/summernote/">https://www.jose-aguilar.com/scripts/jquery/summernote/</a> -->


<!-- <form>
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
    </form>
    </div>
</form> -->

<form class="container my-4 ">
    <div class="card">
        <h5 class="card-header" style=" background-color: #181818; color: white;">CONTACTO</h5>
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
    <label for="email" class="form-label">Mensaje</label>

    <div id="summernote"></div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
    </div>
    <div class="boton">
        <button type="submit" class="btn">Enviar</button>
    </div>
</form>
@endsection