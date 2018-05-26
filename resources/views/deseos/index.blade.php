
@extends('layouts.app')

@section('content')



<div class="container">
<div class="row">
<a href="/deseos/create">Crear</a>
<table class="table table-striped table-darks table table-bordered">
  <thead>
    <tr>
      <th scope="col" style='text-align: center;'>#</th>
      <th scope="col" style='text-align: center;'>Nombre</th>
      <th scope="col" style='text-align: center;'>Precio</th>
      <th scope="col" style='text-align: center;'>Descripción</th>
      <th scope="col" style='text-align: center;'>Cuota</th>
      <th scope="col" style='text-align: center;'>Ahorro</th>
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
      @include('deseos.modals.ahorrarModal')
      <td class="text-center">
      
      <a href="" data-toggle="modal" data-target="#ahorro-{{$deseo->id}}">
        <button type="button" class="btn bg-transparent">
          <i class="fas fa-piggy-bank text-warning" ></i>
        </button>
      </a>
      </td>

      <td ><a href="{{url('/deseos/'.$deseo->id.'/edit')}}"><i class="fas fa-edit text-info"></i></a></td>
      <td ><a href="{{url('/deseos/'.$deseo->id.'/delete')}}"onclick="return confirm('Quieres borrar tu deseo?');"><i class="fas fa-trash-alt text-danger"></i></a></td>
      
     
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="ahorro-{{$deseo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


  <div class="modal-dialog"  role="document">
    <div class="modal-content " style="margin-top: 120px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$deseo->nombre}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

<form method="post" action="{{url('/deseos/ahorro')}}">
{{csrf_field()}}
 
  <div class="form-group ">
    <label for="Cuota">Cuota</label>
    <input type="text" class="form-control" id="nombre" name="cuota" placeholder="Cuota">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection