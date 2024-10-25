<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deptos = Depto::get();
        return view("deptos.index",['deptos'=>$deptos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $deptos = Depto::get();
        return view('deptos.create',compact("deptos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $depto = Depto::Paginate(10);
        Depto::create(['idDepto'=>$request->idDepto,
        'nombreDepto'=>$request->nombreDepto,'nombreMediano'=>$request->nombreMediano,
        'nombreCorto'=>$request->nombreCorto]);
        return redirect()->route('deptos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Depto $depto)
    {
        $deptos = Depto::Paginate(5);
        return view("deptos.show", compact('deptos','depto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depto $depto)
    {
        $deptos = Depto::Paginate(5);
        return view("deptos.edit", compact('deptos','depto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depto $depto)
    {
        $depto->update($request->all());
        return redirect()->route('deptos.index','Alumno actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $depto = Depto::findOrFail($id);
        $depto->delete();
        return redirect()->route('deptos.index')->with('succes','Alumno eliminado correctamente');
   
    }
}
