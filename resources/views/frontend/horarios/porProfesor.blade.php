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

            {{ Form::open(['route' => 'horario.porProfesorSearch']) }}
        <div class="input-group mb-3">
        <label class="input-group-text" for="#">Sede</label>
        {{Form::select("profesor_id", $profesor, null, ["class" => "form-control", "placeholder" => "Seleccione el profesor" ]) }} 
      


        <div class="d-grid gap-2">
          <button class="btn btn-outline-dark" type="submit" aria-label="consultar">Consultar</button>
        </div>

    </div>


    <script>    
  	var input=document.getElementById('apellido').value.toUpperCase();
	var output=document.getElementById('profesor_id').options;
	for(var i=0;i<output.length;i++) 
	{
		var ingreso = output[i].text.toUpperCase();
		
		if(ingreso.indexOf(input)==0)
		{
			output[i].selected =true;
			break;
		}
		else
		//if(document.forms[0].texto_busqueda.value=='')
		{
			output[0].selected=true;
		}
	}

    </script>
@endsection