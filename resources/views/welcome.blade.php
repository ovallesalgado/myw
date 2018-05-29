@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/descarga.png" alt="" width="300" height="300">
        <h1 class="text-uppercase mb-0">My Whims</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Deseos - Caprichos - Viajes</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Que es My Whims?</h2>
        <hr class="star-dark mb-5">
       
        
 
          
            <p class="lead" align="center">My Whims es una alcancia virtual </p>
            <p class="lead" align="center">  que te ayuda a tener control de tus ahorros</p>
            <p class="lead" align="center">  para que puedas comprar todo lo que quieras. </p>
            <p class="lead" align="center">  Registrate y comienza a ahorrar!</p>

          <div class="text-center mt-4" >
          <a class="btn btn-xl btn-outline-light" href="{{ route('register') }}" style="color:#FFF;background:#20c997;">
            
            Registrarse!
          </a>
        </div>
     
        
      </div>
    </section>
    @endsection