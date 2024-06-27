@extends('layouts.app')

@section('titulo', 'crear curso')

@section('contenido')

<br>
<h3>Crear un nuevo curso</h3>
<form action="/cursos" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nombrecurso" class="form-label">Nombre del curso</label>
      <input type="text" class="form-control" id="nombrecurso" name="nombre">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción del curso</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
    <div class="form-group">
        <label for="imagen">Cargar imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Guardar</button>
  </form>

@endsection

