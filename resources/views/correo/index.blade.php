@extends('layouts.principal')
@section('hijos')
<style>
       .btn-table {
        margin-right: 5px; 
    }
</style>
<h1>Modulo de Personas</h1>

<a href="/correo/create/{{$usuario->nombre}}/{{$usuario->apellido}}" class="btn btn-primary">Guardar correo</a>

<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Acciones</th>
    </tr>
</thead>


<tbody>
@foreach($correos as $correo)
    @if($correo->nombre==$usuario->nombre)
    <tr>
    <th>{{$correo->id}}</th>
        <th>{{$correo->nombre}}</th>
        <th>{{$correo->apellido}}</th>
        <th>{{$correo->correo}}</th>
        <td> 
       
            <form action ="/correo/{{$correo->id}}" method="POST"> 
             @csrf
             @method('Delete') 
             <button type="submit" class="btn btn-warning btn-table">Eliminar</button>
             </form>
            </td>
            <td>
            <a href="/correo/{{$correo->id}}/edit" class="btn btn-info btn-table">Editar</a>
            </td>
    </tr>
     @endif
    @endforeach
</tbody>

</table>
@endsection