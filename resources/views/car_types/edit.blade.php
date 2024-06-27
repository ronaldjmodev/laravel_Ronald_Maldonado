
@extends('layouts.app')

@section('titulo', 'Editar Car Type')

@section('contenido')

<br>
<h3 class="text-center">Editar información del Carro</h3>
<form action="/car_types/{{$carType->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombrecarro">Modifique el Nombre del Carro</label>
        <input name="nombre" id="nombrecarro" value="{{$carType->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion">Modifique la Descripción del Carro</label>
        <input name="descripcion" id="descripcion" value="{{$carType->descripcion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection

