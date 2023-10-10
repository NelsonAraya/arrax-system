<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargo = Cargo::paginate(15);
        return view('admin.cargos.index')->with('cargo',$cargo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cargos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
        ]);

        try {

            $cargo = new Cargo();
            $cargo->nombre = $request->nombre;
            $cargo->save();

            return redirect()->route('cargos.index')->with('success', 'Cargo Institucional creado exitosamente.');

        } catch (\Exception $e) {

            return redirect()->route('cargos.index')->with('danger', 'Hubo un error al guardar el cargo. Por favor, inténtalo de nuevo.');
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
