@extends('tienda.layout')

@section('contenido')


<div class="container p4">
  
        <div class="col-md-11">
   
   <br> 
                    
<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
             <th scope="col">usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Edad</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($productos as $user)
                           
          <tr>
          <th scope="row">{{$user->id}}</th>
            <td>{{$user->nombre}}</td>
            <td>{{$user->usuario}}</td>
            <td>{{$user->contrasena}}</td>
            <td>{{$user->edad}}</td>
          </tr>

          @endforeach
        </tbody>
      </table>
  
                </div>
            </div>
       
    </div>
</div>
    
@endsection

    
