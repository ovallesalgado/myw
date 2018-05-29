
@extends('layouts.app')

@section('content')



<div class="container">
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{Session::get('message')}}
    </div>
    @endif
<div class="row">
    
<a href="/deseos/create" class="btn btn-dark">Crear Deseo&nbsp<i class="fas fa-heart" style="color:red;"></i></a>
<table class="table table-striped table-darks table table-bordered">
  <thead>
    <tr>
      <th scope="col" style='text-align: center;'>#</th>
      <th scope="col" style='text-align: center;'>Nombre</th>
      <th scope="col" style='text-align: center;'>Precio</th>
      <th scope="col" style='text-align: center;'>Descripción</th>
      <th scope="col" style='text-align: center;'>Cuota</th>
      <th scope="col" style='text-align: center;'>Ahorro</th>
      <th scope="col" style='text-align: center;'>Progreso</th>
          <th colspan="3"style='text-align: center;'>Opciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach($deseos as $deseo)
        <tr>
          <th scope="row">{{$contador++}}</th>
          <td>{{$deseo->nombre}}</td>
          <td>{{$deseo->precio}}</td>
          <td>{{$deseo->descripcion}}</td>
          <td>{{$deseo->cuota}}</td>
          <td>{{$deseo->ahorro}}</td>
     
        <td> <div class="w3-light-grey"><div class="w3-blue" style="height:20px;width:{{$deseo->ahorroPorcentaje}}%"></div></div></td>
  
          @include('deseos.modals.ahorrarModal')
          <td class="text-center">
          
          <a href="{{url('/deseos/'.$deseo->id.'/cuota')}}">
            <button type="button" class="btn bg-transparent">
              <i class="fas fa-piggy-bank text-warning" ></i>
            </button>
          </a>
          </td>
    
          <td class="text-center">
            <a href="{{url('/deseos/'.$deseo->id.'/edit')}}">
              <button type="button" class="btn bg-transparent">
               <i class="fas fa-edit text-info"></i>  
              </button>
            </a>
           </td>
    
          <td class="text-center">
     
          <a type="button" class="btn bg-transparent" href="{{url('/deseos/'.$deseo->id.'/delete')}}"onclick="return confirm('Quieres borrar tu deseo?');">
          <i class="fas fa-trash-alt text-danger"></i>
      
          </a>
          </td>
          
         
        </tr>
        @endforeach
      </tbody> 

</table>
</div>
</div>
<!--<div id='progressbar'></div>-->

@endsection