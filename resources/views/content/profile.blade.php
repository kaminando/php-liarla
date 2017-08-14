@extends('layouts.main')

@section('content')
  
  <!-- HEADER -->
  @include('content.header', array('headerClass'=>'lightHeader')) 
  

  <!-- PAGE TITLE -->
  <section class="pageTitle settings-page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="titleTable">
            <div class="titleTableInner">
              <div class="pageTitleInfo">
                <h1>ACTUALIZA TU PERFIL</h1>
                <p>Mantén actualizada tu información de contacto.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BOOKING TYPE SECTION -->
  <section class="profileSection">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div class="profileImg">
            <img class="img-responsive" src="images/profile/profile.jpg" alt="">
          </div>
        </div>
        <div class="col-xs-12 col-sm-8">
          <div class="profileContent">
            <div class="editIconRight clearfix">
              <a href="setting.html"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </div>
            <div class="profileTitle">
              <h2>Carlos Alberto Lira</h2>
              <span>Agente de Publicidad</span>
            </div>
            <p>Soy un apasionado de la innovación. Me encanta aprender cosas nuevas y acompañar a otros en su aprendizaje. Creo firmemente en el potencial de las personas para hacer cosas asombrosas, crear, ilusionar y disfrutar con los proyectos que emprenden.</p>
            <div class="profileInfo">
              <p><strong>Nombre(s): </strong> Carlos Alberto</p>
              <p><strong>Apellidos: </strong> Lira</p>
              <p><strong>Teléfono: </strong>(044) 5589899898</p>
              <p><strong>Dirección: </strong>Av. Presidente Masaryk #286 Col. Polanco</p>
              <p><strong>Código Postal: </strong>17644</p>
              <p><strong>País: </strong> México</p>
              <p><strong>Email: </strong> user@liarla.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  @include('content.footer')
  

@endsection


{{-- include a modales --}}