@extends('layouts.car')

@section('titulo', 'Crear Tipo de Carro')

@section('contenido')

<br>
<h3>Crear Tipo de Carro</h3>
<form action="/car_types" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nombrecarros" class="form-label">Nombre del Carro</label>
        <input type="text" class="form-control" id="nombrecarros" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción del Carro</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
    </div>
    <div class="form-group">
        <label for="imagen">Cargar imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file" required>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection


