<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cia;
use App\Models\Usuario;
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
        return view ('bitatocas-matMayor.edit')->with('usu',$usuarios);
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
