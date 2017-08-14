@extends('layouts.main')

@section('content')
  
  <!-- HEADER -->
  @include('content.header', array('headerClass'=>'lightHeader')) 
  

  <!-- PAGE TITLE -->
  <section class="pageTitle search-page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="titleTable">
            <div class="titleTableInner">
              <div class="pageTitleInfo">
                <h1>RESULTADOS DE TU BÚSQUEDA</h1>
                <div class="under-border"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PAGE CONTENT -->
  <section class="mainContentSection packagesSection">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-xs-12">
          <aside>
            <div class="panel panel-default packagesFilter">
              <div class="panel-heading">
                <h3 class="panel-title">búsqueda</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="searchFilter">
                      <select name="guiest_id3" id="guiest_id3" class="select-drop">
                        <option selected disabled value="-1">Personas</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">Más de 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                      <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                      <div class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                      <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                      <div class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <a href="#" class="btn btn-block buttonTransparent">Buscar</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default packagesFilter">
              <div class="panel-heading">
                <h3 class="panel-title">Presupuesto</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="input-group date text-search dark-place-holder filterDate">
                      <input type="text" class="form-control presupuesto-bigger currency" placeholder="$">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
        <div class="col-sm-9 col-xs-12">
          <div class="row sidebarPage">
            <div class="col-xs-12">
              <div class="media packagesList">
                <a class="media-left fancybox-pop" href="img/packages/package-list-01.jpg">
                  <img class="media-object" src="img/packages/package-list-01.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <div class="bodyLeft">
                    <h4 class="media-heading"><a href="hotel-detail.html">Zipolite Oaxaca</a></h4>
                    <div class="countryRating">
                      <span>México</span>
                      <ul class="list-inline rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <p>Acapulco es el destino playero que más fama le ha dado a México a nivel internacional gracias a su bello entorno natural, su arena dorada, su clima tropical, sus aguas cálidas y su gente.</p>
                    <ul class="list-inline detailsBtn">
                      <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 Ene, 2019</span></li>
                      <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 días</span></li>
                    </ul>
                  </div>
                  <div class="bodyRight">
                    <div class="bookingDetails">
                      <h2>$3,899</h2>
                      <p>Por Persona</p>
                      <a href="hotel-detail.html" class="btn buttonTransparent clearfix">Detalles</a>
                      <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">Más Inf.</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media packagesList">
                <a class="media-left fancybox-pop" href="img/packages/package-list-02.jpg">
                  <img class="media-object" src="img/packages/package-list-02.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <div class="bodyLeft">
                    <h4 class="media-heading"><a href="hotel-detail.html">Crucero canarias</a></h4>
                    <div class="countryRating">
                      <span>USA</span>
                      <ul class="list-inline rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <p>Acapulco es el destino playero que más fama le ha dado a México a nivel internacional gracias a su bello entorno natural, su arena dorada, su clima tropical, sus aguas cálidas y su gente.</p>
                    <ul class="list-inline detailsBtn">
                      <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 Ene, 2019</span></li>
                      <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 días</span></li>
                    </ul>
                  </div>
                  <div class="bodyRight">
                    <div class="bookingDetails">
                      <h2>$5,100</h2>
                      <p>Por Persona</p>
                      <a href="hotel-detail.html" class="btn buttonTransparent clearfix">Detalles</a>
                      <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">Más Inf.</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media packagesList">
                <a class="media-left fancybox-pop" href="img/packages/package-list-03.jpg">
                  <img class="media-object" src="img/packages/package-list-03.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <div class="bodyLeft">
                    <h4 class="media-heading"><a href="hotel-detail.html">Miami Beach</a></h4>
                    <div class="countryRating">
                      <span>USA</span>
                      <ul class="list-inline rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <p>Acapulco es el destino playero que más fama le ha dado a México a nivel internacional gracias a su bello entorno natural, su arena dorada, su clima tropical, sus aguas cálidas y su gente.</p>
                    <ul class="list-inline detailsBtn">
                      <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 Ene, 2019</span></li>
                      <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 días</span></li>
                    </ul>
                  </div>
                  <div class="bodyRight">
                    <div class="bookingDetails">
                      <h2>$14,599</h2>
                      <p>Por Persona</p>
                      <a href="hotel-detail.html" class="btn buttonTransparent clearfix">Detalles</a>
                      <a class="btn buttonTransparent" href='booking-1.html'>Book</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media packagesList">
                <a class="media-left fancybox-pop" href="img/packages/package-list-04.jpg">
                  <img class="media-object" src="img/packages/package-list-04.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <div class="bodyLeft">
                    <h4 class="media-heading"><a href="hotel-detail.html">Punta Escondida</a></h4>
                    <div class="countryRating">
                      <span>Colombia</span>
                      <ul class="list-inline rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <p>Acapulco es el destino playero que más fama le ha dado a México a nivel internacional gracias a su bello entorno natural, su arena dorada, su clima tropical, sus aguas cálidas y su gente.</p>
                    <ul class="list-inline detailsBtn">
                      <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 Ene, 2019</span></li>
                      <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 días</span></li>
                    </ul>
                  </div>
                  <div class="bodyRight">
                    <div class="bookingDetails">
                      <h2>$2,500</h2>
                      <p>Por Persona</p>
                      <a href="hotel-detail.html" class="btn buttonTransparent clearfix">Detalles</a>
                      <a class="btn buttonTransparent" href='booking-1.html'>Book</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media packagesList">
                <a class="media-left fancybox-pop" href="images/results/1.jpg">
                  <img class="media-object" src="images/results/1.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <div class="bodyLeft">
                    <h4 class="media-heading"><a href="hotel-detail.html">Hotel Arcos Acapulco</a></h4>
                    <div class="countryRating">
                      <span>México</span>
                      <ul class="list-inline rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <p>Acapulco es el destino playero que más fama le ha dado a México a nivel internacional gracias a su bello entorno natural, su arena dorada, su clima tropical, sus aguas cálidas y su gente.</p>
                    <ul class="list-inline detailsBtn">
                      <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 Ene, 2019</span></li>
                      <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 días</span></li>
                    </ul>
                  </div>
                  <div class="bodyRight">
                    <div class="bookingDetails">
                      <h2>$3,780</h2>
                      <p>Por Persona</p>
                      <a href="hotel-detail.html" class="btn buttonTransparent clearfix">Detalles</a>
                      <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media packagesList">
                <a class="media-left fancybox-pop" href="img/packages/package-list-06.jpg">
                  <img class="media-object" src="img/packages/package-list-06.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <div class="bodyLeft">
                    <h4 class="media-heading"><a href="hotel-detail.html">Amsterdam</a></h4>
                    <div class="countryRating">
                      <span>Euroopa</span>
                      <ul class="list-inline rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <p>Acapulco es el destino playero que más fama le ha dado a México a nivel internacional gracias a su bello entorno natural, su arena dorada, su clima tropical, sus aguas cálidas y su gente.</p>
                    <ul class="list-inline detailsBtn">
                      <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 Ene, 2019</span></li>
                      <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 días</span></li>
                    </ul>
                  </div>
                  <div class="bodyRight">
                    <div class="bookingDetails">
                      <h2>$22,999</h2>
                      <p>Por Persona</p>
                      <a href="hotel-detail.html" class="btn buttonTransparent clearfix">Detalles</a>
                      <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media packagesList">
                <a class="media-left fancybox-pop" href="images/results/2.jpg">
                  <img class="media-object" src="images/results/2.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <div class="bodyLeft">
                    <h4 class="media-heading"><a href="hotel-detail.html">Hotel Caribean</a></h4>
                    <div class="countryRating">
                      <span>USA</span>
                      <ul class="list-inline rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <p>Acapulco es el destino playero que más fama le ha dado a México a nivel internacional gracias a su bello entorno natural, su arena dorada, su clima tropical, sus aguas cálidas y su gente.</p>
                    <ul class="list-inline detailsBtn">
                      <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 Ene, 2019</span></li>
                      <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 días</span></li>
                    </ul>
                  </div>
                  <div class="bodyRight">
                    <div class="bookingDetails">
                      <h2>$6,000</h2>
                      <p>Por Persona</p>
                      <a href="hotel-detail.html" class="btn buttonTransparent clearfix">Detalles</a>
                      <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media packagesList">
                <a class="media-left fancybox-pop" href="images/results/3.jpg">
                  <img class="media-object" src="images/results/3.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <div class="bodyLeft">
                    <h4 class="media-heading"><a href="hotel-detail.html">Hotel del Valle Taxco</a></h4>
                    <div class="countryRating">
                      <span>México</span>
                      <ul class="list-inline rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <p>Acapulco es el destino playero que más fama le ha dado a México a nivel internacional gracias a su bello entorno natural, su arena dorada, su clima tropical, sus aguas cálidas y su gente.</p>
                    <ul class="list-inline detailsBtn">
                      <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 Ene, 2019</span></li>
                      <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 días</span></li>
                    </ul>
                  </div>
                  <div class="bodyRight">
                    <div class="bookingDetails">
                      <h2>$3,860</h2>
                      <p>Por Persona</p>
                      <a href="hotel-detail.html" class="btn buttonTransparent clearfix">Detalles</a>
                      <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media packagesList">
                <a class="media-left fancybox-pop" href="images/results/4.jpg">
                  <img class="media-object" src="images/results/4.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <div class="bodyLeft">
                    <h4 class="media-heading"><a href="hotel-detail.html">Notredame</a></h4>
                    <div class="countryRating">
                      <span>Europa</span>
                      <ul class="list-inline rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                    <p>Acapulco es el destino playero que más fama le ha dado a México a nivel internacional gracias a su bello entorno natural, su arena dorada, su clima tropical, sus aguas cálidas y su gente.</p>
                    <ul class="list-inline detailsBtn">
                      <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 Ene, 2019</span></li>
                      <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 días</span></li>
                    </ul>
                  </div>
                  <div class="bodyRight">
                    <div class="bookingDetails">
                      <h2>$9,300</h2>
                      <p>Por Persona</p>
                      <a href="hotel-detail.html" class="btn buttonTransparent clearfix">Detalles</a>
                      <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- INQUIRY MODAL -->
  <div class="modal fade bookingModal modalBook" id="inquiryModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Dudas...</h4>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" id="yourName" placeholder="Nombre">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="yourEmail" placeholder="Tu Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="phoneNumber" placeholder="Teléfono">
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="3" placeholder="Escríbenos todas las dudas que tengas acerca de este destino."></textarea>
            </div>
            <button type="submit" class="btn buttonCustomPrimary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  @include('content.footer')
  

@endsection


{{-- include a modales --}}