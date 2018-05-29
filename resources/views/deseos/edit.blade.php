
@extends('layouts.app')

@section('content')





<div class="container ">
<div class="row">
<div class="col-md-6">
<form method="post" action="{{url('/deseos/'.$deseo->id.'/edit')}}">

{{csrf_field()}}
 
  <div class="form-group ">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$deseo->nombre}}"required>
  </div>
  <div class="form-group ">
    <label for="precio">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio"  placeholder="Precio" value="{{$deseo->precio}}" required>
  </div>
  <div class="form-group ">
    <label for="descripcion">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" value="{{$deseo->descripcion}}">
  </div>
  <div class="form-group ">
    <label for="cuota">Cuota</label>
    <input type="number" class="form-control" id="cuota" name="cuota"  placeholder="Cuota" value="{{$deseo->cuota}}">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Ahorro</label>
    <input type="number" class="form-control" id="ahorro" name="ahorro"  placeholder="Ahorro" value="{{$deseo->ahorro}}">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="{{url('/deseos')}}" class="btn btn-primary">Volver</a>
  
</form>
</div>
</div>
</div>

@endsection