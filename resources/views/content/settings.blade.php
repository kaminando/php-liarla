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
                <h1>PROTEGE TU INFORMACIÓN</h1>
                <p>Por seguridad cambia periódicamente tu contraseña.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ACCOUNT SETTINGS SECTION -->
  <section class="settingSection">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="settingContent bg-ash">
            <h4>CONFIGURACIÓN DE TU CUENTA</h4>
            <!-- Change Password -->
            <div class="changePassword">
              <p>Cambia Tu Contraseña</p>
              <div class="row">
                <form action="" method="post">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Contraseña anterior">
                  </div>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Contraseña nueva">
                  </div>
                  <div class="col-sm-12">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña nueva">
                  </div>
                  <div class="col-sm-12">
                    <button type="submit" class="btn buttonTransparent">Actualizar Contraseña</button>
                  </div>
                </form>
              </div>
            </div>
            <hr>

            <!-- Change Setting  -->
            <div class="changeSetting">
              <p>Configuración de Newsletter</p>
              <div class="row">
                <form action="" method="post">
                  <div class="form-check col-sm-12">
                    <input id="checkbox-1" class="checkbox-custom form-check-input" name="checkbox-1" type="checkbox"  >
                    <label for="checkbox-1" class="checkbox-custom-label form-check-label">Recibir emails periódicamente con ofertas destacadas.</label>
                  </div>
                  <div class="form-check col-sm-12">
                    <input id="checkbox-2" class="checkbox-custom form-check-input" name="checkbox-1" type="checkbox"  >
                    <label for="checkbox-2" class="checkbox-custom-label form-check-label">Suscribirbe a las notas informativas de LIARLA.</label>
                  </div>

                  <div class="col-sm-12">
                    <button type="submit" class="btn buttonTransparent">Actualizar Newsletter</button>
                  </div>
                </form>
              </div>
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