@extends('layouts.principal')
@section('hijos')
<h1>Editar telefono</h1>

<div class="container">
<div class="row">
<div class="col">


<form action="/telefono/{{$editar->id}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$editar->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$editar->apellido}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$editar->telefono}}" class="form-control">
    </div>

<button type="submit">Actualizar</button>
</form>

</div>
</div>
</div>

@endsection