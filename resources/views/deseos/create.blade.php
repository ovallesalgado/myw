
@extends('layouts.app')

@section('content')





<div class="container ">
<div class="row">
<div class="col-md-6">
<form method="post" action="{{url('/deseos')}}">
{{csrf_field()}}
 
  <div class="form-group ">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
  </div>
  <div class="form-group ">
    <label for="precio">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio"  placeholder="Precio" required>
  </div>
  <div class="form-group ">
    <label for="descripcion">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
  </div>
  <div class="form-group ">
    <label for="cuota">Cuota</label>
    <input type="number" class="form-control" id="cuota" name="cuota"  placeholder="Cuota">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Ahorro</label>
    <input type="number" class="form-control" id="ahorro" name="ahorro"  placeholder="Ahorro">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Crear</button>
  <a href="{{url('/deseos')}}" class="btn btn-primary">Volver</a>
</form>
</div>
</div>
</div>

@endsection