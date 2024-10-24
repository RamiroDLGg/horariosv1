<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::get();
        return view("alumnos.index",['alumnos'=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumnos = Alumno::get();
        return view('alumnos.create',compact("alumnos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = Alumno::Paginate(10);
        Alumno::create(['noCtrl'=>$request->noCtrl,
        'nombreAlumno'=>$request->nombreAlumno,'apellidoPaterno'=>$request->apellidoPaterno,
        'apellidoMaterno'=>$request->apellidoMaterno,'sexo'=>$request->sexo]);
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $alumnos = Alumno::Paginate(5);
        return view("alumnos.show", compact('alumnos','alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $alumnos = Alumno::Paginate(5);
        return view("alumnos.edit", compact('alumnos','alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        return redirect()->route('alumnos.index','Alumno actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('succes','Alumno eliminado correctamente');
    }
}
