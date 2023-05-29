
@extends('layouts.header')

@section('base')
<div class="mb-2 text-center">
    <h1 class="text-primary">LISTA DE DIRECTORES ELIMINADOS</h1>
</div>
<div class="mb-2">
 <a href="{{route('director.index',1)}}" class="btn btn-primary">regresar</a>
 <a href="{{asset('/')}}" class="btn btn-dark">menu principal</a>
</div>
<div class="card">
    <table id="example" class="table">
        <thead class="thead-dark">
          <tr>
            <th width="5%">#</th>
            <th width="10%">nombre</th>
            <th width="10%">apellidos</th>
            <th width="5%">genero</th>
            <th width="20%">direccion</th>
            <th width="5%">edad</th>
            <th width="5%">ci</th>
            <th width="20%">correo</th>
            <th width="5%">telefono</th>
            <th width="10%">acciones</th>    
          </tr>
        </thead>
        <tbody>
          @foreach ($directores as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->nombre}}</td>
            <td>{{$row->apellidos}}</td>
            <td>{{$row->genero}}</td>
            <td>{{$row->direccion}}</td>
            <td>{{$row->edad}}</td>
            <td>{{$row->ci}}</td>
            <td>{{$row->correo}}</td>
            <td>{{$row->telefono}}</td>
            <td>
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-light" href="{{route('director.restore',$row->id)}}">restaurar</a>
                </div>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
</div>
    
@endsection