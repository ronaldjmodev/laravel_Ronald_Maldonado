@extends('layouts.car')

@section('titulo', 'car_types.store')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create Car Type</h1>
            <form action="{{ route('car_types.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection

