
@extends('layouts.header')

@section('base')
<div class="mb-2 text-center">
    <h1 class="text-primary">CREAR PELICULA</h1>
</div>
<div class="mb-2">
 <a href="{{route('pelicula.index',1)}}" class="btn btn-primary">regresar</a>
 <a href="{{asset('/')}}" class="btn btn-dark">menu principal</a>
</div>
<div class="card">
    <div class="card-header text-center">
       <h4>datos</h4>
    </div>
    <div class="card-body">
        <form action="{{route('pelicula.store')}}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="nombre">nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="ingrese el nombre" required>
                </div>
                <div class="col-6">
                    <label for="categoria">categoria</label>
                    <input class="form-control" type="text" name="categoria" id="categoria" placeholder="ingrese la categoria" required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="anio">año</label>
                    <input class="form-control" type="number" name="anio" id="anio" placeholder="ingrese el año" required>
                </div>
                <div class="col-3">
                    <label for="descripcion">descripcion</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="10" rows="3" required></textarea>
                </div>
                <div class="col-6">
                    <label for="director">director</label>
                    <select class="form-control" name="director" id="director" required >
                        <option disabled selected value="ninguno">elegir su director de pelicula</option>
                        @foreach ($directores as $director)
                            <option value="{{$director->id}}">{{$director->nombre}} {{$director->apellidos}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="mb-2 text-left">
              <button class="btn btn-success" type="submit">guardar</button>
            </div>
        </form>
    </div>
</div>
    
@endsection