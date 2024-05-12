@extends('layouts.car')

@section('contenido')

@section('titulo', 'Car Types')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Car Types</h1>
            <a href="{{ route('car_types.create') }}" class="btn btn-success mb-3">Crear Car Type</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carTypes as $TiposCarros)
                    <tr>
                        <td>{{ $TiposCarros->id }}</td>
                        <td>{{ $TiposCarros->nombre }}</td>
                        <td>{{ $TiposCarros->cantidad }}</td>
                        <td>{{ $TiposCarros->marca }}</td>
                        <td>
                            <!-- Action buttons -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
