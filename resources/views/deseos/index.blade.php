
@extends('layouts.admin')

@section('content')



<div class="container">



<div class="row">
<div class="col-md-11">
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{Session::get('message')}}
    </div>
    @endif
    @if(Session::has('message-danger'))
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{Session::get('message-danger')}}
    </div>
    @endif
    </div>
    </div>  
<div class="row">
<div class="container">



<a href="/deseos/create" class="btn btn-success">Crear Deseos <i class="fa fa-plus" style="color:black;"></i></a>
</div>
<br>
<div class="col-md-11">
<div class="table-responsive">  
<table class="table" style="border:2px solid black;" align="center" >
  <thead>
    <tr>
      <th class="success" scope="col" style='text-align: center;border: thin solid black;'>#</th>
      <th class="success" scope="col" style='text-align: center;border: thin solid black;'>Nombre</th>
      <th class="success" scope="col" style='text-align: center;border: thin solid black;'>Precio</th>
      <th class="success" scope="col" style='text-align: center;border: thin solid black;'>Descripción</th>
      <th class="success" scope="col" style='text-align: center;border: thin solid black;'>Cuota</th>
      <th class="success" scope="col" style='text-align: center;border: thin solid black;'>Ahorro</th>
      <th class="success" scope="col" style='text-align: center;border: thin solid black;'>Progreso</th>
          <th class="success" colspan="3"style='text-align: center;border: thin solid black;'>Opciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach($deseos as $deseo)
        <tr>
          <th scope="row" style="border: thin solid black;">{{$contador++}}</th>
          <td style="border: thin solid black;">{{$deseo->nombre}}</td>
          <td style="border: thin solid black;">{{$deseo->precio}}</td>
          <td style="border: thin solid black;">{{$deseo->descripcion}}</td>
          <td style="border: thin solid black;">{{$deseo->cuota}}</td>
          <td style="border: thin solid black;">{{$deseo->ahorro}}</td>
     
        <td style="border: thin solid black;"> 
        
        <div class="progress">
  <div class="progress-bar" role="progressbar" style="height:20px;width:{{$deseo->ahorroPorcentaje}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$deseo->ahorroPorcentaje}}%</div>
</div>
        </td>
  
          @include('deseos.modals.ahorrarModal')
          <td class="text-center" style="border: thin solid black;">
          
          <a href="{{url('/deseos/'.$deseo->id.'/cuota')}}">
            <button type="button" class="btn bg-transparent">
              <i class="fa fa-plus text-success" ></i>
            </button>
          </a>
          </td>
    
          <td class="text-center" style="border: thin solid black;">
            <a href="{{url('/deseos/'.$deseo->id.'/edit')}}">
              <button type="button" class="btn bg-transparent">
               <i class="fa fa-edit text-warning"></i>  
              </button>
            </a>
           </td>
    
          <td class="text-center" style="border: thin solid black;">
     
          <a type="button" class="btn bg-transparent" href="{{url('/deseos/'.$deseo->id.'/delete')}}"onclick="return confirm('Quieres borrar tu deseo?');">
          <i class="fa fa-trash text-danger"></i>
      
          </a>
          </td>
          
         
        </tr>
        @endforeach
      </tbody> 

</table>
</div>
</div>
</div>
</div>
<!--<div id='progressbar'></div>-->

@endsection