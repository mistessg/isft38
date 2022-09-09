@extends('backend.layouts.main')
@section('title', 'Historia')
@section('content')
     @forelse($historias as $historia)

         {{$historia->historia}}
         <br>


   @empty
     <p class="text-capitalize">No hay Historia cargada.</p>
   @endforelse
 </div>
@endsection
