<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plazas = Plaza::get();
        return view("plazas.index",['plazas'=>$plazas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plazas = Plaza::get();
        return view('plazas.create',compact("plazas"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plaza = Plaza::Paginate(10);
        Plaza::create(['idPlaza'=>$request->idPlaza,
        'nombrePlaza'=>$request->nombrePlaza,]);
        return redirect()->route('plazas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plaza $plaza)
    {
        $plazas = Plaza::Paginate(5);
        return view("plazas.show", compact('plazas','plaza'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plaza $plaza)
    {
        $plazas = Plaza::Paginate(5);
        return view("plazas.edit", compact('plazas','plaza'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plaza $plaza)
    {
        $plaza->update($request->all());
        return redirect()->route('plazas.index','Plaza actualizado Correctamente');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plaza = Plaza::findOrFail($id);
        $plaza->delete();
        return redirect()->route('plazas.index')->with('succes','Plaza eliminado correctamente');
    }
}
