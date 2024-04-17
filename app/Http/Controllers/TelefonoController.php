<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Telefono;


class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id, string $id2)
    {
        //
        return view('telefono.create')->with('nombre',$id)->with('apellido',$id2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $telefono = new Telefono();
        $telefono->nombre=$request->get('nombre');
        $telefono->apellido=$request->get('apellido');
        $telefono->telefono=$request->get('telefono');
        $telefono->save();
        return redirect('/usuario');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $usuarios=Usuario::find($id);
        $telefonos=Telefono::All();
        return view('telefono.index')->with('telefonos',$telefonos)->with('usuario',$usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar=Telefono::find($id);
        return view('telefono.edit')->with('editar', $editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editar=Telefono::find($id);
        $editar->nombre=$request->get('nombre');
        $editar->apellido=$request->get('apellido');
        $editar->telefono=$request->get('telefono');
        $editar->save();
        return redirect('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Telefono::find($id);
        $eliminarRegistro->delete();
        return redirect('/usuario');
    }
}
