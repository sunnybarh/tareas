@extends('layouts.principal')
@section('hijos')
<h1>Guardar telefono</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/telefono" method="POST">
    @csrf
    
    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="{{$nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" value="{{$apellido}}" class="form-control">
    </div>
   
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono"  class="form-control">
    </div>

<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>

@endsection