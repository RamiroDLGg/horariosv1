<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $puestos = Puesto::get();
        return view("puestos.index",['puestos'=>$puestos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $puestos = Puesto::get();
        return view('puestos.create',compact("puestos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $puesto = Puesto::Paginate(10);
        Puesto::create(['idPuesto'=>$request->idPuesto,
        'nombre'=>$request->nombre,'tipo'=>$request->tipo,]);
        return redirect()->route('puestos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Puesto $puesto)
    {
        $puestos = Puesto::Paginate(5);
        return view("puestos.show", compact('puestos','puesto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puesto $puesto)
    {
        $puestos = Puesto::Paginate(5);
        return view("puestos.edit", compact('puestos','puesto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puesto $puesto)
    {
        $puesto->update($request->all());
        return redirect()->route('puestos.index','Puesto actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $puesto = Puesto::findOrFail($id);
        $puesto->delete();
        return redirect()->route('puestos.index')->with('succes','Puesto eliminado correctamente');
    }
}
