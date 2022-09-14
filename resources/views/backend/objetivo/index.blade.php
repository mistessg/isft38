@extends('backend.layouts.main')
@section('title', 'Objetivo')
@section('content')
     @forelse($objetivos as $objetivo)

         {{$objetivo->objetivo}}
         <br>


   @empty
     <p class="text-capitalize">No hay Objetivo cargado.</p>
   @endforelse
 </div>
@endsection
