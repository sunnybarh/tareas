@extends('layouts.principal')
@section('hijos')
<h1>Modulo de Personas</h1>

<a href="/telefono/create/{{$usuario->nombre}}/{{$usuario->apellido}}" class="btn btn-primary">Guardar telefono</a>

<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($telefonos as $telefono)
    @if($telefono->nombre==$usuario->nombre)
    <tr>
    <th>{{$telefono->id}}</th>
        <th>{{$telefono->nombre}}</th>
        <th>{{$telefono->apellido}}</th>
        <th>{{$telefono->telefono}}</th>
        <th>
        <form action ="/telefono/{{$telefono->id}}" method="POST"> 
             @csrf
             @method('Delete') 
             <button type="submit" class="btn btn-warning">Eliminar</button>
             </form>
            </th>
            <th>
            <a href="/telefono/{{$telefono->id}}/edit" class="btn btn-info">Editar</a>
            </th>
    </tr>
     @endif
    @endforeach
    </tbody>

</table>
@endsection