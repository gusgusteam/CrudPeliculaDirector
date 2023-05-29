@extends('layouts.header')

@section('base')
<div class="mb-2 text-center">
    <h1 class="text-primary">LISTA DE PELICULAS ELIMINADAS</h1>
</div>
<div class="mb-2">
 <a href="{{route('pelicula.index',1)}}" class="btn btn-primary">regresar</a>
 <a href="{{asset('/')}}" class="btn btn-dark">menu principal</a>
</div>
<div class="card">
    <table id="example" class="table">
        <thead class="thead-dark">
          <tr>
            <th width="5%">#</th>
            <th width="20%">nombre</th>
            <th width="10%">categoria</th>
            <th width="5%">año</th>
            <th width="35%">descripcion</th>
            <th width="15%">director</th>
            <th width="10%">acciones</th>    
          </tr>
        </thead>
        <tbody>
          @foreach ($peliculas as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->nombre}}</td>
            <td>{{$row->categoria}}</td>
            <td>{{$row->anio}}</td>
            <td>{{$row->descripcion}}</td>
            <td>{{$row->nombre_director}} {{$row->apellidos_director}}</td>
            <td>
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-light" href="{{route('pelicula.restore',$row->id)}}">restore</a>
                </div>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
</div>
    
@endsection