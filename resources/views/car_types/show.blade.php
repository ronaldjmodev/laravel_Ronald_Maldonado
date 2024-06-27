@extends('layouts.car')

@section('titulo', 'Detalles de Car Type')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($carType->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$carType->descripcion}}</p>
    </div>
    <br>
    <a href="/car_types/{{$carType->id}}/edit" class="btn btn-warning">Editar carro</a>

@endsection
