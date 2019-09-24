@extends('tienda.layout')


@section('contenido')
   


<div class="container p4">
  
        <div class="col-md-12">
 
                    
<table class="table">
        <thead>
          <tr>
          
            <th scope="col">Nombre del producto</th>
            <th scope="col">valor</th>
            <th scope="col">codigo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($productos as $user)
                           
          <tr>
        
            <td>{{$user->nombre_producto}}</td>
            <td>{{$user->valor}}</td>
            <td>{{$user->codigo}}</td>
            
          </tr>

          @endforeach
        </tbody>
      </table>
  
                </div>
            </div>
       
    </div>
</div>
    
@endsection
