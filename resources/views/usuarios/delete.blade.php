@extends('layouts.principal')
@section('hijos')
<h1>Eliminar persona</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/usuario/{{$eliminar->id}}" method="POST">
    @csrf
    @method('Delete') 

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$eliminar->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$eliminar->apellido}}" class="form-control">
    </div>
   


<button type="submit">Eliminar</button>
</form>

</div>
</div>
</div>

@endsection