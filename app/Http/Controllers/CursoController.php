<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        $course = Curso::all();
        return view("cursos.index" , compact("course") );
    }

    public function create()
    {
        return view("cursos.create");
    }

      public function store(Request $request)
    {
       // return $request->all(); con este devuelvo toda la información...
       $course = new Curso();
       $course->nombre = $request ->input("nombre");
       $course->descripcion = $request ->input("descripcion");

       if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $course->imagen = $request->file('imagen')->store('public/cursos');
       }

       $course->save();
       return "Guardado";
    }

    public function show(string $id)
    {
       $course = Curso::find($id);
       return view("cursos.show" , compact("course"));
    }

    public function edit(string $id)
    {
        $course = Curso::find($id);
        return view('cursos.edit',compact('course'));
    }

      public function update(Request $request, string $id)
    {
        $course = Curso::find($id);
        $course->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $course->imagen = $request->file('imagen')->store('public/cursos');
            $course->save();
            return 'Actualizado';
    }
}

      public function destroy(string $id)
    {
        //
    }
}
