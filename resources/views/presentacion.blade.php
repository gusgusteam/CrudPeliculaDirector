@extends('layouts.header')

@section('base')
<div class="text-center">
    <h1>CRUD DE PELICULA Y DIRECTOR</h1>
</div>

<div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
    <h1>CRUD DE PELICULA Y DIRECTOR EN LARAVEL 9</h1>
</div>
<div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
  <h3>pagina web con relacion de 1 a 1*..</h3>
</div>
<div class="mb-2 text-center">
  <a href="{{route('pelicula.index',1)}}" class="btn btn-dark"> PELICULA </a>
  <a href="{{route('director.index',1)}}" class="btn btn-dark"> DIRECTOR</a>
</div>
@endsection