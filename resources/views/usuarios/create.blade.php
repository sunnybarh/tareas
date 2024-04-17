@extends('layouts.principal')
@section('hijos')
<h1>Crear persona</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/usuario" method="POST">
    @csrf
    
    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido"  class="form-control">
    </div>
   

<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>

@endsection