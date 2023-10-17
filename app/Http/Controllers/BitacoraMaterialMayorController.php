<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cia;
use App\Models\Usuario;
use App\Models\BitacoraMaterialMayor;
use Illuminate\Support\Facades\Auth;

class BitacoraMaterialMayorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cia = Cia::FindOrFail(Auth::user()->cia_id);
        return view('bitatocas-matMayor.index')->with('cia',$cia)->with('usu',Auth::user());;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuarios = Usuario::all();
        $bi=BitacoraMaterialMayor::where('material_mayor_id',$id)->latest()->first();
        return view ('bitatocas-matMayor.edit')->with('usu',$usuarios)->with('bi',$bi)->with('mat',$id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fecha_salida' => 'required',
            'hora_salida' => 'required',
            'fecha_llegada' => 'required',
            'hora_llegada' => 'required',
            'km_llegada' => 'required',
            'direccion' => 'required',
            'conductor' => 'required',
            'obac' => 'required',
            'servicio' => 'required',
        ]);

        try {
            
            $bi = new BitacoraMaterialMayor();

            $bi->fecha_salida = $request->fecha_salida;
            $bi->hora_salida = $request->hora_salida;
            $bi->kmsalida = $request->km_salida;
            $bi->fecha_llegada = $request->fecha_llegada;
            $bi->hora_llegada = $request->hora_llegada;
            $bi->kmllegada = $request->km_llegada;
            $bi->direccion = $request->direccion;
            $bi->conductor_id = $request->conductor;
            $bi->obac_id = $request->obac;
            $bi->material_mayor_id = $id;
            $bi->servicio = $request->fecha_salida;
            $bi->registrador_id = Auth::user()->id;

            $bi->save();
            
            return redirect()->route('bitacora.index')->with('success', 'Bitacora de Material Mayor creada exitosamente.');

        } catch (\Exception $e) {

            return redirect()->route('bitacora.index')->with('danger', 'Hubo un error al guardar la Bitacora. Por favor, inténtalo de nuevo.');

        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
