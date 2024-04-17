@extends('layouts.principal')
@section('hijos')
<h1>Guardar correo</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/correo" method="POST">
    @csrf
    
    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="{{$nombre}}"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" value="{{$apellido}}"  class="form-control">
    </div>
   

    <div class="mb-3">
    <label for="">Correo</label>
    <input type="text" name="correo"  class="form-control">
    </div>

<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>

@endsection