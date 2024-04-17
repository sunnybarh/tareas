<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios=Usuario::All();
        return view('usuarios.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuario = new Usuario();
        $usuario->nombre=$request->get('nombre');
        $usuario->apellido=$request->get('apellido');
        $usuario->save();
        return redirect('/usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro=Usuario::find($id);
        return view('usuarios.delete')->with('eliminar',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar=Usuario::find($id);
        return view('usuarios.edit')->with('editar', $editar);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editar=Usuario::find($id);
        $editar->nombre=$request->get('nombre');
        $editar->apellido=$request->get('apellido');
        $editar->save();
        return redirect('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Usuario::find($id);
        $eliminarRegistro->delete();
        return redirect('/usuario');
    }
}
