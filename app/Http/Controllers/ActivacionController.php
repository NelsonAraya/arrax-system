<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activacion;
use App\Models\MaterialMayor;
use Illuminate\Support\Facades\Auth;


class ActivacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('activacion.index')->with('usu',Auth::user());
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
        $acti = new Activacion();
        $mat = MaterialMayor::FindOrFail($id);
        
        if ($request->has('activar')) {

            $acti->usuario_id = Auth::user()->id;
            $acti->material_mayor_id = $id;
            $acti->estado = 'A';
            $msg = "Con Conductor";
            $tipo_msg = "success";
            $mat->activacion = 'S';
           
        } elseif ($request->has('desactivar')) {
            $acti->estado = 'I';
            $acti->usuario_id = Auth::user()->id;
            $acti->material_mayor_id = $id;
            $msg = "sin Conductor";
            $tipo_msg = "danger";
            $mat->activacion = 'N';
           
        } 
        $mat->save();
        $acti->save();
        return redirect()->route('activacion.index')->with($tipo_msg, 'Unidad:  '.$mat->clave.' '.$msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
