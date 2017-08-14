@extends('layouts.main')

@section('content')
  
  <!-- HEADER -->
  @include('content.header', array('headerClass'=>'lightHeader')) 
  

  <!-- PAGE TITLE -->
  <section class="pageTitle contact-page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="titleTable">
            <div class="titleTableInner">
              <div class="pageTitleInfo">
                <h1>CONTACTO</h1>
                <p>Siempre estamos listos para ayudarte. ¡Somos tus compañeros de viaje!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHITE SECTION-->
  <section class="mainContentSection">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-4 col-xs-12">
          <div class="contactInfo">
            <h2>ACÉRCATE A NOSOTROS</h2>
            <p>Ponte en contacto con nosotros y con gusto resolveremos todas tus dudas.</p>
            <div class="media">
              <span class="media-left">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h4 class="media-heading">DIRECCIÓN</h4>
                <p>Av. Escandón #274<br>Col. Nueva Industrial CDMX</p>
              </div>
            </div>
            <div class="media">
              <span class="media-left">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h4 class="media-heading">TELÉFONOS</h4>
                <p><a href="tel:+5555331199">+55 55331199</a><br><a href="tel:0180012122112">01 800 12122112</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-7 col-xs-12 col-lg-8">
          <div class="contactForm">
            <form action="" method="POST" role="form" class="form">
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="Asunto">
              </div>
              <div class="form-group">
                <textarea class="form-control not-resize" id="" placeholder="Mensaje"></textarea>
              </div>
              <button type="submit" class="btn buttonCustomPrimary">ENVIAR MENSAJE</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <!-- FOOTER -->
  @include('content.footer')
  

@endsection


{{-- include a modales --}}