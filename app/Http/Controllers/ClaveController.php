<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClaveEmergencia;

class ClaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clav = ClaveEmergencia::paginate(15);
        return view('admin.claves.index')->with('clav',$clav);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.claves.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
            'tipo' => 'required',
        ]);

        try {

            $cla = new CLaveEmergencia();
            $cla->clave = $request->clave;
            $cla->descripcion = $request->descripcion;
            $cla->estado = $request->estado;
            $cla->tipo = $request->tipo;
            $cla->save();
            
            return redirect()->route('claves.index')->with('success', 'Clave creada exitosamente.');

        } catch (\Exception $e) {

            return redirect()->route('claves.index')->with('danger', 'Hubo un error al guardar la clave. Por favor, inténtalo de nuevo.');

        }
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
