
@extends('layouts.app')

@section('content')
@if(Session::has('message'))
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif




<div class="container ">
<div class="row">
<div class="col-md-6">
<form method="post" action="{{url('/deseos/'.$deseo->id.'/cuota')}}">

{{csrf_field()}}
 
  <div class="form-group ">
    <label for="cuota">Cuota</label>
    <input type="number" class="form-control" id="cuota" name="cuota"  placeholder="Cuota" value="{{$deseo->cuota}}">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="{{url('/deseos')}}" class="btn btn-primary">Volver</a>
  
</form>
</div>
</div>
</div>

@endsection