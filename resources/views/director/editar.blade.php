@extends('layouts.header')

@section('base')
<div class="mb-2 text-center">
    <h1 class="text-primary">EDITAR DIRECTOR</h1>
</div>
<div class="mb-2">
 <a href="{{route('director.index',1)}}" class="btn btn-primary">regresar</a>
 <a href="{{asset('/')}}" class="btn btn-dark">menu principal</a>
</div>
<div class="card">
    <div class="card-header text-center">
       <h4>DATOS ACTUALES</h4>
    </div>
    <div class="card-body">
        <form action="{{route('director.update',$director->id)}}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="nombre">nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{$director->nombre}}" placeholder="ingrese el nombre" required>
                </div>
                <div class="col-6">
                    <label for="apellidos">apellidos</label>
                    <input class="form-control" type="text" name="apellidos" id="apellidos" value="{{$director->apellidos}}" placeholder="ingrese el apellido" required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="edad">edad</label>
                    <input class="form-control" type="number" name="edad" id="edad" value="{{$director->edad}}" placeholder="ingrese la edad" required>
                </div>
                <div class="col-3">
                    <label for="ci">ci</label>
                    <input class="form-control" type="number" name="ci" id="ci" value="{{$director->ci}}" placeholder="ingrese su nro de carnet" required>
                </div>
                <div class="col-3">
                    <label for="genero">genero</label>
                    <select class="form-control" name="genero" id="genero" >
        
                        <option @if ($director->genero=="ninguno") {{"selected"}} @endif value="ninguno">elegir su genero por favor</option>
                        <option @if ($director->genero=="hombre") {{"selected"}} @endif value="hombre">hombre</option>
                        <option @if ($director->genero=="mujer") {{"selected"}} @endif value="mujer">mujer</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="celular">telefono</label>
                    <input class="form-control" type="number" name="celular" id="celular" value="{{$director->telefono}}" placeholder="ingrese celular" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="direccion">direccion</label>
                    <textarea class="form-control" name="direccion" id="direccion" cols="10" rows="3">{{$director->direccion}}</textarea>
                </div>
                <div class="col-6">
                    <label for="correo">correo</label>
                    <input class="form-control" type="email" name="correo" id="correo" value="{{$director->correo}}" placeholder="ingrese su correo" required>
                </div>
            </div>
            <br>
            <div class="mb-2 text-left">
              <button class="btn btn-success" type="submit">actualizar</button>
            </div>
        </form>
    </div>
</div>
    
@endsection