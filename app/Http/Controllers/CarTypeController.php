<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarType;

class CarTypeController extends Controller
{
    public function index()
    {
        $carTypes = CarType::all();
        return view('car_types.index', compact('carTypes'));
    }

    public function create()
    {
        return view('car_types.create');
    }

    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Crear una nueva instancia de CarType
        $carType = new CarType();
        $carType->nombre = $request->input('nombre');
        $carType->descripcion = $request->input('descripcion');

        // Manejar la carga de la imagen
        if ($request->hasFile('imagen')) {
            $carType->imagen = $request->file('imagen')->store('public/carros');
        }

        // Guardar el tipo de carro en la base de datos
        $carType->save();

        // Redirigir a la página de listado con un mensaje de éxito
        return redirect('/car_types')->with('success', 'Tipo de carro creado exitosamente.');
    }

    public function show(string $id)
    {
        $carType = CarType::find($id);
        return view('car_types.show', compact('carType'));
    }

    public function edit(string $id)
    {
        $carType = CarType::find($id);
        return view('car_types.edit', compact('carType'));
    }

    public function update(Request $request, string $id)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $carType = CarType::find($id);
        $carType->fill($request->except('imagen'));

        // Manejar la carga de la imagen
        if ($request->hasFile('imagen')) {
            $carType->imagen = $request->file('imagen')->store('public/carros');
        }

        $carType->save();

        // Redirigir a la página de listado con un mensaje de éxito
        return redirect('/car_types')->with('success', 'Tipo de carro actualizado exitosamente.');
    }
}
