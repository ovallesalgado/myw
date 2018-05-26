
@extends('layouts.app')

@section('content')



<div class="container">
<div class="row">

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

      <td ><i class="fas fa-edit text-info"></i></td>
      <td ><i class="fas fa-trash-alt text-danger"></i></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection