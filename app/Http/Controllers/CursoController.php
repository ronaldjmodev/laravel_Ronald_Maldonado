<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Curso::all();
       // return $course;
            return view("cursos.index" , compact("course") );
          }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cursos.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return $request->all(); con este devuelvo toda la información...
       $course = new Curso();
       $course->nombre = $request ->input("nombre");
       $course->descripcion = $request ->input("descripcion");

       $course->save();
       return "Guardado";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
