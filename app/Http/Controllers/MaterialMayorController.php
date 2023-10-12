<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaterialMayor;
use App\Models\Cia;

class MaterialMayorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mat = MaterialMayor::paginate(15);
        return view('admin.mat-mayor.index')->with('mat',$mat);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cia=Cia::pluck('nombre','id');
        return view('admin.mat-mayor.create')
                ->with('cia',$cia);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'patente' => 'required',
            'clave' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'anio' => 'required',
            'cia' => 'required',
            'orden' => 'required',
        ]);

        try {

            $mat = new MaterialMayor();
            $mat->patente = strtoupper($request->patente);
            $mat->clave = strtoupper($request->clave);
            $mat->marca = $request->marca;
            $mat->modelo = $request->modelo;
            $mat->anio = $request->anio;
            $mat->cia_id = $request->cia;
            $mat->orden = $request->orden;
            $mat->save();
            
            return redirect()->route('mat-mayor.index')->with('success', 'Material Mayor creado exitosamente.');

        } catch (\Exception $e) {

            return redirect()->route('mat-mayor.index')->with('danger', 'Hubo un error al guardar el material mayor. Por favor, inténtalo de nuevo.');

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
