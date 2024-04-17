@extends('layouts.principal')
@section('hijos')
<h1>Modulo de Personas</h1>

<a href="usuario/create" class="btn btn-primary">Crear nueva persona</a>


<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($usuarios as $usuario)
    <tr>
    <th>{{$usuario->id}}</th>
        <th>{{$usuario->nombre}}</th>
        <th>{{$usuario->apellido}}</th>
        <th>
        <a href="/usuario/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
        <a href="telefono/{{$usuario->id}}" class="btn btn-success">Telefono</a>
        <a href="/correo/{{$usuario->id}}" class="btn btn-success">Correo</a>
       <a href="/usuario/{{$usuario->id}}" class="btn btn-warning">Eliminar</a>
    </th>
    </tr>
    @endforeach
</tbody>

</table>
@endsection