@extends('tienda.layout')
@section('contenido')
<div class="container">
<div class="col-md-12">
        <form action="{{route ('tienda.store')}}" method="POST">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese Nombre">
     </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese usuario">
     </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Contraseña</label>
    <input type="text" class="form-control" name="contra" aria-describedby="emailHelp" placeholder="Ingrese contraseña">
     </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Edad</label>
    <input type="text" class="form-control" name="edad" aria-describedby="emailHelp" placeholder="Ingrese edad">
     </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Nombre del producto</label>
    <input type="text" class="form-control" name="producto" aria-describedby="emailHelp" placeholder="Ingrese producto">
     </div>
      <div class="form-group">
    <label for="exampleInputEmail1">valor</label>
    <input type="text" class="form-control" name="valor" aria-describedby="emailHelp" placeholder="Ingrese valor">
     </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Codigo</label>
    <input type="text" class="form-control" name="Codigo" aria-describedby="emailHelp" placeholder="Ingrese codigo">
     </div>
  
  
  <button type="submit" class="btn btn-outline-warning btn-block">Agregar</button>
</form>
</div>    
</div>
@endsection