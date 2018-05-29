
@extends('layouts.app')

@section('content')

<style>
.sombra {
  -webkit-box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);
}
</style>




<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Registro
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        

           <div class="row">

<div class="col-md-6">
    <img class="sombra" src="/img/ayuda/1.jpg" style="width: 500px; box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);" alt="">
      
</div>
<div class="col-md-6">
1.	Pulsar en registrar!!
</div>

</div>
<br>
<div class="row">
<div class="col-md-6">
    <img class="sombra" src="/img/ayuda/2.jpg" style="width: 500px; box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);" alt="">
</div>
<div class="col-md-6">
1.	Ingresa el nombre <br>
2.	Ingresa el apellido<br>
3.	Ingresa el correo<br>
4.	Ingresa la contraseña<br>
5.	Confirma contraseña<br>
6.	Pulsa el botón registrar 
</div>
</div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Deseos
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <div class="row">

<div class="col-md-6">
    <img class="sombra" src="/img/ayuda/4.jpg" style="width: 500px; box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);" alt="">
      
</div>
<div class="col-md-6">
1.	Crear deseos<br>
2.	Número del deseo<br>
3.	Nombre del deseo<br>
4.	Precio del deseo<br>
5.	Descripción del deseo<br>
6.	Cuota que estas ahorrando para el deseo<br>
7.	Cantidad ahorra para el deseo<br>
8.	Barra de progreso de tu deseo<br>
9.	Agregar cuota para ahorrar<br>
10.	Edrar el deseo<br>
11.	 Elmina el deseo<br>

</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Cuota
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <div class="row">
              <div class="col-md-6">
                  <img class="sombra" src="/img/ayuda/5.jpg" style="width: 500px; box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);" alt="">
              </div>
              <div class="col-md-6">
              1.	Valor que deseas ahorrar <br>
              2.	Guardar cambios <br>
              3.	Volver sin guardar cambios<br>

              </div>
          </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading4">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          Crear y editar
        </button>
      </h5>
    </div>
    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
      <div class="card-body">
       
        
      <div class="row">
              <div class="col-md-6">
                  <img class="sombra" src="/img/ayuda/6.jpg" style="width: 500px; box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);" alt="">
              </div>
              <div class="col-md-6">
              1.	Ingresar los datos de tu deseo<br>
              2.	Guardar tu deseo o los cambios realizados<br>
              3.	Volver sin guardar los cambios<br>


              </div>
          </div>

      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading5">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          Eliminar deseo
        </button>
      </h5>
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
      <div class="card-body">
      
      
      <div class="row">
              <div class="col-md-6">
                  <img class="sombra" src="/img/ayuda/7.jpg" style="width: 500px; box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);" alt="">
              </div>
              <div class="col-md-6">
              1.	Eliminar deseo<br>
              2.	Aceptar para eliminar deseo<br>
              3.	Cancelar la eliminación del deseo<br>



              </div>
          </div>

      </div>

      </div>
    </div>
  </div>


   <div class="card">
    <div class="card-header" id="heading6">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
          Salir
        </button>
      </h5>
    </div>
    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
      <div class="card-body">
      
      
      <div class="row">
              <div class="col-md-6">
                  <img class="sombra" src="/img/ayuda/8.jpg" style="width: 500px; box-shadow: 10px 10px 5px -7px rgba(0,0,0,0.75);" alt="">
              </div>
              <div class="col-md-6">
              1.	En el menú desplegable con el nombre de usuario se encuentra la opción de salir de su cuanta.



              </div>
          </div>

      </div>

      </div>
    </div>
  </div>
  <a href="{{url('/deseos')}}" class="btn btn-primary">Volver</a>
</div>

@endsection