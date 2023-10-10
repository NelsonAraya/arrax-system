<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanguineo;
class GrupoSanguineoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sanguineo = Sanguineo::paginate(15);
        return view('admin.grup-sanguineo.index')->with('sanguineo',$sanguineo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.grup-sanguineo.create');
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

            $sanguineo = new Sanguineo();
            $sanguineo->nombre = $request->nombre;
            $sanguineo->save();

            return redirect()->route('grup-sanguineo.index')->with('success', 'Grupo sanguineo creado exitosamente.');

        } catch (\Exception $e) {

            return redirect()->route('grup-sanguineo.index')->with('danger', 'Hubo un error al guardar el grupo sanguineo. Por favor, inténtalo de nuevo.');

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
