@extends('layout.main')
@section('content')
<h1 style="text-align:center;margin:40px 0px; font-weight:bold;color: rgb(175, 34, 34);">CONTACTO</h1>
<form>
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
@endsection