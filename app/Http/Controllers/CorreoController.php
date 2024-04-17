<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Correo;
use App\Models\Usuario;

class CorreoController extends Controller
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
        return view('correo.create')->with('nombre',$id)->with('apellido',$id2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $correo = new Correo();
        $correo->nombre=$request->get('nombre');
        $correo->apellido=$request->get('apellido');
        $correo->correo=$request->get('correo');
        $correo->save();
       return redirect('/usuario');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $usuarios=Usuario::find($id);
        $correos=Correo::All();
        return view('correo.index')->with('correos',$correos)->with('usuario',$usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar=Correo::find($id);
        return view('correo.edit')->with('editar', $editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editar=Correo::find($id);
        $editar->nombre=$request->get('nombre');
        $editar->apellido=$request->get('apellido');
        $editar->correo=$request->get('correo');
        $editar->save();
        return redirect('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Correo::find($id);
        $eliminarRegistro->delete();
        return redirect('/usuario');
    }
}
