@extends('layouts.main')

@section('content')
  
  <!-- HEADER -->
  @include('content.header', array('headerClass'=>'lightHeader')) 
  

  <!-- WELCOME SECTION -->
  <section class="welcomeSection">
    <br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2>Hola Carlos Alberto Lira, bienvenido a  <span> LIARLA!</span></h2>
          <p>Te presentamos la actividad que has tenido en nuestra plataforma, si no reconoces alguna o tienes dudas, por favor ponte en contacto con nosotros.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- RECENT ACTIVITY SECTION -->
  <section class="recentActivitySection">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 ">
          <div class="recentActivityContent bg-ash">
            <div class="dashboardPageTitle">
              <h2>Actividad Reciente</h2>
            </div>
            <div class="table-responsive"  data-pattern="priority-columns">
              <table class="table listingsTable">
                <tbody>
                  <tr class="rowItem">
                    <td class="dateTd"><div class="date">25 <span>Ene</span></div></td>
                    <td class="iconTd">
                      <div class="icon br-orange">
                        <i class="fa fa-fort-awesome" aria-hidden="true"></i>
                      </div>
                    </td>
                    <td class="packageTd">
                      <ul class="list-inline listingsInfo">
                        <li>
                          <h4><a href="#">Hotel RITZ Acapulco</a></h4>
                          <p>2 Adultos ( 1 noche )</p>
                        </li>
                      </ul>
                    </td>
                    <td class="priceTd">
                      <ul class="list-inline listingsInfo text-right">
                        <li>
                          <h4>$3,699</h4>
                          <p>Total</p>
                        </li>
                      </ul>
                    </td>
                    <td class="bookingTd">
                      <ul class="list-inline listingsInfo text-left">
                        <li>
                          <h4>VIAJE ID</h4>
                          <p>LIARLA-8DK8-8EE</p>
                          <h4>RESERVADO EL</h4>
                          <p>MIÉRCOLES, 10 ENE 2017</p>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="rowItem">
                    <td class="dateTd"><div class="date">6 <span>May</span></div></td>
                    <td class="iconTd">
                      <div class="icon br-blue">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                      </div>
                    </td>
                    <td class="packageTd">
                      <ul class="list-inline listingsInfo">
                        <li>
                          <h4><a href="#">Ciudad de México a Madrid</a></h4>
                          <p>Vuelo directo</p>
                        </li>
                      </ul>
                    </td>
                    <td class="priceTd">
                      <ul class="list-inline listingsInfo text-right">
                        <li>
                          <h4>$14,200</h4>
                          <p>Total</p>
                        </li>
                      </ul>
                    </td>
                    <td class="bookingTd">
                      <ul class="list-inline listingsInfo text-left">
                        <li>
                          <h4>VIAJE ID</h4>
                          <p>5754-8DK8-8EE</p>
                          <h4>RESERVADO EL</h4>
                          <p>LUNES, 1 FEBRERO 2017</p>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <tr class="rowItem">
                    <td class="dateTd"><div class="date">13 <span>May</span></div></td>
                    <td class="iconTd">
                      <div class="icon br-blue">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                      </div>
                    </td>
                    <td class="packageTd">
                      <ul class="list-inline listingsInfo">
                        <li>
                          <h4><a href="#">Madrid a Amsterdam</a></h4>
                          <p>Vuelo directo</p>
                        </li>
                      </ul>
                    </td>
                    <td class="priceTd">
                      <ul class="list-inline listingsInfo text-right">
                        <li>
                          <h4>$5,900</h4>
                          <p>Total</p>
                        </li>
                      </ul>
                    </td>
                    <td class="bookingTd">
                      <ul class="list-inline listingsInfo text-left">
                        <li>
                          <h4>VIAJE ID</h4>
                          <p>5754-8DK8-8EE</p>
                          <h4>RESERVADO EL</h4>
                          <p>LUNES, 1 FEBRERO 2017</p>
                        </li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
  </section>
  

  <!-- FOOTER -->
  @include('content.footer')
  

@endsection


{{-- include a modales --}}