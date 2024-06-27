@extends('layouts.car')

@section('contenido')

@section('titulo', 'Car Types')


<br>
<h1 class="text-center">Listado de Carros Disponibles</h1>
<br>
<div class="row">
    @foreach ($carTypes as $TiposCarros) <!-- Cambiar el nombre de la variable para ser consistente -->
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($TiposCarros->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $TiposCarros->nombre }}</h5>
              <p class="card-text">{{ $TiposCarros->descripcion }}</p>
              <a href="/car_types/{{$TiposCarros->id}}" class="btn btn-success">Ver detalles</a> <!-- Cambia el enlace según sea necesario -->
            </div>
        </div>
    </div>

@endforeach
</div>
@endsection
