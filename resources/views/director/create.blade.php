
@extends('layouts.header')

@section('base')
<div class="mb-2 text-center">
    <h1 class="text-primary">CREAR DIRECTOR</h1>
</div>
<div class="mb-2">
 <a href="{{route('director.index',1)}}" class="btn btn-primary">regresar</a>
 <a href="{{asset('/')}}" class="btn btn-dark">menu principal</a>
</div>
<div class="card">
    <div class="card-header text-center">
       <h4>datos</h4>
    </div>
    <div class="card-body">
        <form action="{{route('director.store')}}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="nombre">nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="ingrese el nombre" required>
                </div>
                <div class="col-6">
                    <label for="apellidos">apellidos</label>
                    <input class="form-control" type="text" name="apellidos" id="apellidos" placeholder="ingrese el apellido" required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="edad">edad</label>
                    <input class="form-control" type="number" name="edad" id="edad" placeholder="ingrese la edad" required>
                </div>
                <div class="col-3">
                    <label for="ci">ci</label>
                    <input class="form-control" type="number" name="ci" id="ci" placeholder="ingrese su nro de carnet" required>
                </div>
                <div class="col-3">
                    <label for="genero">genero</label>
                    <select class="form-control" name="genero" id="genero" >
                        <option selected value="ninguno">elegir su genero</option>
                        <option value="hombre">hombre</option>
                        <option value="mujer">mujer</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="celular">telefono</label>
                    <input class="form-control" type="number" name="celular" id="celular" placeholder="ingrese celular" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="direccion">direccion</label>
                    <textarea class="form-control" name="direccion" id="direccion" cols="10" rows="3"></textarea>
                </div>
                <div class="col-6">
                    <label for="correo">correo</label>
                    <input class="form-control" type="email" name="correo" id="correo" placeholder="ingrese su correo" required>
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