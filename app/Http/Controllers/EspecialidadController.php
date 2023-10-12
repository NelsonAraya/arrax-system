<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $esp = Especialidad::paginate(15);
        return view('admin.especialidades.index')->with('esp',$esp);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.especialidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'descripcion' => 'required',
        ]);

        try {

            $esp = new Especialidad();
            $esp->codigo = strtoupper($request->codigo);
            $esp->descripcion = $request->descripcion;
            $esp->save();
            
            return redirect()->route('especialidad.index')->with('success', 'Especialidad exitosamente.');

        } catch (\Exception $e) {

            return redirect()->route('especialidad.index')->with('danger', 'Hubo un error al guardar la especialidad. Por favor, inténtalo de nuevo.');

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
