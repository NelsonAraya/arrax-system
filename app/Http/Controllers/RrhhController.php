<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cia;
use App\Models\Cargo;
use App\Models\Sanguineo;
use App\Models\Usuario;

class RrhhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rrhh.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cia=Cia::pluck('nombre','id');
        $cargo=Cargo::pluck('nombre','id');
        $sanguineo=Sanguineo::pluck('nombre','id');
        return view('rrhh.create')
            ->with('cia',$cia)
            ->with('cargo',$cargo)
            ->with('sanguineo',$sanguineo);
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

            $usu = new Usuario();
            $usu->numero = $request->numero;
            $usu->nombre = $request->nombre;
            $usu->save();
            
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
