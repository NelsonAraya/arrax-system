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
        $usu = Usuario::paginate(15);
        return view('rrhh.index')->with('usu',$usu);
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
            'run' => 'required',
            'rol' => 'required',
            'nombres' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'nacimiento' => 'required',
            'mail' => 'required',
            'fono' => 'required',
            'direccion' => 'required',
            'cia' => 'required',
            'cargo' => 'required',
            'sanguineo' => 'required',
            'operativo' => 'required',
        ]);

        try {
            $run = str_replace('.','',$request->run);
            $run = str_replace('-','',$run);
            $dv = substr($run, -1);
            $id = substr($run, 0, -1);

            $usu = new Usuario();
            $usu->id = $id;
            $usu->dv = $dv;
            $usu->rol = $request->rol;
            $usu->nombres = $request->nombres;
            $usu->apellidop = $request->paterno;
            $usu->apellidom = $request->materno;
            $usu->fecha_nacimiento = $request->nacimiento;
            $usu->email = $request->mail;
            $usu->telefono = $request->fono;
            $usu->direccion = $request->direccion;
            $usu->cia_id = $request->cia;
            $usu->sanguineo_id = $request->sanguineo;
            $usu->cargo_id = $request->cargo;
            $usu->operativo = $request->operativo;
            $usu->password = bcrypt($id);

            $usu->save();
            return redirect()->route('rrhh.index')->with('success', 'Usuario creado exitosamente.');

        } catch (\Exception $e) {

            return redirect()->route('rrhh.index')->with('danger', 'Hubo un error al guardar el usuario. Por favor, inténtalo de nuevo.');

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
        try{
            $usuario = Usuario::findOrFail($id);
            $cia=Cia::pluck('nombre','id');
            $cargo=Cargo::pluck('nombre','id');
            $sanguineo=Sanguineo::pluck('nombre','id');
            
            return view('rrhh.edit')
                    ->with('cia',$cia)
                    ->with('cargo',$cargo)
                    ->with('usu',$usuario)
                    ->with('sanguineo',$sanguineo);

        } catch (ModelNotFoundException $e) {
            
           // redirigir a una página de error 404 o realizar alguna otra acción.
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'rol' => 'required',
            'nombres' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'nacimiento' => 'required',
            'mail' => 'required',
            'fono' => 'required',
            'direccion' => 'required',
            'cia' => 'required',
            'cargo' => 'required',
            'sanguineo' => 'required',
            'operativo' => 'required',
            'login_autorizado' => 'required',
            'estado' => 'required',
        ]);

        try {
            $usu = Usuario::findOrFail($id);
            $usu->rol = $request->rol;
            $usu->nombres = $request->nombres;
            $usu->apellidop = $request->paterno;
            $usu->apellidom = $request->materno;
            $usu->fecha_nacimiento = $request->nacimiento;
            $usu->email = $request->mail;
            $usu->telefono = $request->fono;
            $usu->direccion = $request->direccion;
            $usu->cia_id = $request->cia;
            $usu->sanguineo_id = $request->sanguineo;
            $usu->cargo_id = $request->cargo;
            $usu->operativo = $request->operativo;
            $usu->login_autorizado = $request->login_autorizado;
            $usu->estado = $request->estado;
            $usu->save();

            return redirect()->route('rrhh.index')->with('success', 'Usuario Modificado exitosamente.');
            
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
    public function verMaterialMayor(string $id){
        dd($id);
    }
}
