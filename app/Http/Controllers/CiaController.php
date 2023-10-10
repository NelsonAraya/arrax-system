<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cia;

class CiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cia = Cia::paginate(15);
        return view('admin.cias.index')->with('cia',$cia);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|integer',
            'nombre' => 'required|string',
        ]);

        try {

            $cia = new Cia();
            $cia->numero = $request->numero;
            $cia->nombre = $request->nombre;
            $cia->save();
            
            return redirect()->route('cias.index')->with('success', 'Compañia creada exitosamente.');

        } catch (\Exception $e) {

            return redirect()->route('cias.index')->with('danger', 'Hubo un error al guardar la compañia. Por favor, inténtalo de nuevo.');

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
