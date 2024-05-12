@extends('layouts.app')

@section('contenido')

@section('titulo', 'Listado de cursos')

    <br>
    <h1 class="text-center">Listado de Cursos Disponibles</h1>
    <br><!--
        Div para contener las tarjetas de cursos -->
<div class="row">
        @foreach ($course as $capacitacion) <!-- Cambiar el nombre de la variable para ser consistente -->
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="Imagen del curso"> <!-- Cambia la imagen según tus necesidades -->
                <div class="card-body">
                  <h5 class="card-title">{{ $capacitacion->nombre }}</h5>
                  <p class="card-text">{{ $capacitacion->descripcion }}</p>
                  <a href="#" class="btn btn-success">Ver detalles</a> <!-- Cambia el enlace según sea necesario -->
                </div>
            </div>
        </div>

 @endforeach
</div>
@endsection
