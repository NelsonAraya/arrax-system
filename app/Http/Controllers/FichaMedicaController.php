<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\FichaMedica;
class FichaMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usu = Usuario::all();
        return view('ficha-medica.index')->with('usu',$usu);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try{
            $usuario = Usuario::findOrFail($id);
            
            return view('ficha-medica.edit')->with('usu',$usuario);


        } catch (ModelNotFoundException $e) {
            
           // redirigir a una página de error 404 o realizar alguna otra acción.
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $usu = Usuario::findOrFail($id);
    
            if($usu->ficha == null){
                $ficha = new FichaMedica();
                $ficha->peso = $request->peso;
                $ficha->talla = $request->talla;
                $ficha->imc = $request->imc;
                $ficha->contacto1 = $request->contacto_1;
                $ficha->fono1 = $request->fono_1;
                $ficha->contacto2 = $request->contacto_2;
                $ficha->fono2 = $request->fono_2;
                $ficha->enfermedades = $request->enfermedades;
                $ficha->tratamientos = $request->tratamientos;
                $ficha->quirurgicos = $request->quirurgicos;
                $ficha->alergias = $request->alergias;
                $usu->ficha()->save($ficha);
            }else{
                $usu->ficha->peso = ($request->peso)? $request->peso: null;
                $usu->ficha->talla = ($request->talla)? $request->talla: null;
                $usu->ficha->imc = ($request->imc)? $request->imc: null;
                $usu->ficha->contacto1 = ($request->contacto_1)? $request->contacto_1: null; 
                $usu->ficha->fono1 = ($request->fono_1)? $request->fono_1: null;
                $usu->ficha->contacto2 = ($request->contacto_2)? $request->contacto_2: null;
                $usu->ficha->fono2 = ($request->fono_2)? $request->fono_2: null;
                $usu->ficha->enfermedades = ($request->enfermedades)? $request->enfermedades: null;
                $usu->ficha->tratamientos = ($request->tratamientos)? $request->tratamientos: null;
                $usu->ficha->quirurgicos = ($request->quirurgicos)? $request->quirurgicos: null;
                $usu->ficha->alergias = ($request->alergias)? $request->alergias: null;
                $usu->ficha->save();

            }

            return redirect()->route('ficha-medica.index')->with('success', 'Ficha Medica Actualizada exitosamente.');
            
        } catch (ModelNotFoundException $e) {
            
            // redirigir a una página de error 404 o realizar alguna otra acción.
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
