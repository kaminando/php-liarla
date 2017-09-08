@extends('layouts.main')

@section('content')
  
  <!-- HEADER -->
  @include('content.header', array('headerClass'=>'')) 
  

  <!-- BANNER -->
  <section class="bannercontainer home-cover">
    <div class="fullscreenbanner-container">
      <div class="fullscreenbanner">
        <ul>

          <li data-transition="parallaxhorizontal" data-slotamount="8" data-masterspeed="700" data-title="Slide 1">
            <img src="images/home_slider/1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          </li>
          <li data-transition="parallaxvertical" data-slotamount="8" data-masterspeed="700" data-title="Slide 1">
            <img src="images/home_slider/2.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          </li>
          <li data-transition="parallaxhorizontal" data-slotamount="8" data-masterspeed="700" data-title="Slide 1">
            <img src="images/home_slider/3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          </li>
          <li data-transition="parallaxvertical" data-slotamount="8" data-masterspeed="700" data-title="Slide 1">
            <img src="images/home_slider/4.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          </li>
          <li data-transition="parallaxhorizontal" data-slotamount="8" data-masterspeed="700" data-title="Slide 1">
            <img src="images/home_slider/5.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          </li>
          <li data-transition="parallaxvertical" data-slotamount="8" data-masterspeed="700" data-title="Slide 1">
            <img src="images/home_slider/6.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          </li>
          <li data-transition="parallaxhorizontal" data-slotamount="8" data-masterspeed="700" data-title="Slide 1">
            <img src="images/home_slider/7.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
          </li>

          
        </ul>
      </div>
    </div>

    <section class="darkSection desk-search-bar no-xs">
      <div class="container">
        <div class="row gridResize">
          <div class="col-xs-12">
            <div class="row">
            <p class="center">
              <button type="button" class="btn btn-primary type-selector">
                <i class="fa fa-plane" aria-hidden="true"></i>
                <br>
                Vuelos
              </button>&nbsp;&nbsp;
              <button type="button" class="btn btn-primary type-selector">
                <i class="fa fa-building-o" aria-hidden="true"></i>
                <br>
                Hoteles
              </button>&nbsp;&nbsp;
              <button type="button" class="btn btn-primary type-selector">
                <i class="fa fa-plane" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-building-o" aria-hidden="true"></i>
                <br>
                Vuelo y hotel
              </button>
            </p>
            </div>
            <div class="row">
              <div class="col-xs-8">
                <div class="input-group date text-search presupuesto-desk" >
                  <input type="text" class="form-control currency" placeholder="Presupuesto">
                </div>
              </div>
              <div class="col-xs-2">
                <div class="searchTour desk">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option selected disabled value="-1">Adultos</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                    <option value="3">Más de 4</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-2">
                <div class="searchTour desk">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option selected disabled value="-1">Niños</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                    <option value="3">Más de 4</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row gridResize">
          <br><br>
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-4">
                <div class="input-group date ed-datepicker" data-provide="datepicker">
                  <label>Salida:</label>
                  <input type="text" class="form-control date-desk-search" placeholder="MM/DD/YYYY">
                  <div class="input-group-addon">
                      <span class="fa fa-calendar"></span>
                  </div>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="input-group date ed-datepicker" data-provide="datepicker">
                  <label>Llegada:</label>
                  <input type="text" class="form-control date-desk-search" placeholder="MM/DD/YYYY">
                  <div class="input-group-addon">
                      <span class="fa fa-calendar"></span>
                  </div>
                </div>
              </div>
              <div class="col-xs-4">
                <label>&nbsp;</label>
                <a href="search-results" class="btn btn-block buttonCustomPrimary">BUSCAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <!-- SEARCH TOUR -->
  <section class="darkSection only-xs">
    <div class="container">
      <div class="row gridResize">
        <div class="col-sm-3 col-xs-12">
          <div class="sectionTitleDouble">
            <p>Busca</p>
            <h2>tus <span>destinos</span></h2>
          </div>
        </div>
        <div class="col-sm-7 col-xs-12">
          <div class="row">
            <div class="col-sm-3 col-xs-12 presupuesto-mbl">
              <div class="input-group date text-search" >
                <label>Presupuesto</label>
                <input type="text" class="form-control currency" placeholder="€">
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="input-group date ed-datepicker" data-provide="datepicker">
                <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                <div class="input-group-addon">
                    <span class="fa fa-calendar"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="input-group date ed-datepicker" data-provide="datepicker">
                <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                <div class="input-group-addon">
                    <span class="fa fa-calendar"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="searchTour">
                <select name="guiest_id2" id="guiest_id2" class="select-drop">
                  <option selected disabled value="-1">Personas</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="3">4</option>
                  <option value="3">Más de 4</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
          <a href="#" class="btn btn-block buttonCustomPrimary">Buscar</a>
        </div>
      </div>
    </div>
  </section>

  <section class="mainContentSection packagesSection">
    <div class="container">
      <div class="jumbotron home-jumbotron como-funciona">
        <h3 class="section-header center">Cómo funciona</h3>
        <div class="row">
          <div class="col-md-4 inf presupuesto">
            <div>
              <div class="img">
                <div><i class="fa fa-credit-card" aria-hidden="true"></i></div>
              </div>
              <h4>Ingresa tu <span>presupuesto</span></h4>
              <p>
                ¿Cuánto dinero tienes?
              </p>
            </div>
            
          </div>
          <div class="col-md-4 inf explora">
            <div>
              <div class="img">
                <div><i class="fa fa-binoculars" aria-hidden="true"></i></div>
              </div>
              <h4>Explora <span>destinos</span></h4>
              <p>
                Déjanos sorprenderte
                <br>
                Explora los excelentes destinos que te ofrecemos (también puedes escoger solo vuelo u hotel).
              </p>
            </div>
          </div>
          <div class="col-md-4 inf encuentra">
            <div>
              <div class="img">
                <div><i class="fa fa-plane" aria-hidden="true"></i></div>
              </div>
              <h4><span>Encuentra</span> los mejores vuelos</h4>
            <p>
              Vete a descubrir el mundo a lugares a los que no sabías que podías ir con tu presupuesto.
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packagesSection liarla-interested">
    <div class="container">
      <div class="row">
        <h3 class="section-header center">¿En qué estás interesado?</h3>
        <p class="section-header center">Explora algunos de ls diferentes formatos de viajes seleccionados para ti.</p>
        <br><br>
        <div class="col-sm-3 interested-block">
          <a href="#">
            <div class="wrapper">
              <div class="content beach"></div>
              <div class="dark-layer"></div>
              <div class="inf-layer">
                <div class="draw">
                  <img src="images/interested/thumbs/beach-thumb.svg">
                  <p>Playa</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-3 interested-block">
          <a href="#">
            <div class="wrapper">
              <div class="content friends"></div>
              <div class="dark-layer"></div>
              <div class="inf-layer">
                <div class="draw">
                  <img src="images/interested/thumbs/friends-thumb.svg">
                  <p>Amigos</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-3 interested-block">
          <a href="#">
            <div class="wrapper">
              <div class="content tropical"></div>
              <div class="dark-layer"></div>
              <div class="inf-layer">
                <div class="draw">
                  <img src="images/interested/thumbs/tropical-thumb.svg">
                  <p>Tropical</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-3 interested-block">
          <a href="#">
            <div class="wrapper">
              <div class="content romantic"></div>
              <div class="dark-layer"></div>
              <div class="inf-layer">
                <div class="draw">
                  <img src="images/interested/thumbs/romantic-thumb.svg">
                  <p>Romántico</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <br><br>
  </section>

  <!-- PAGE CONTENT -->
  <section class="packagesSection">
    <br><br><br>
    <div class="container">
      <div class="row">
        <h3 class="section-header center">Ve hasta donde han ido otros...</h3>
        <p class="section-header center">Explora algunos buenos tips sobre el mundo por algunos de los viajeros.</p>
        <br><br>
        <div class="col-sm-6 col-lg-4 col-xs-12">
          <div class="thumbnail deals">
            <img src="images/hotels/azteca-inn.jpg" alt="deal-image">
            <a href="#" class="pageLink"></a>
            <div class="discountInfo discountCol-3">
              <ul class="list-inline rating homePage">
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
              </ul>
              <ul class="list-inline duration">
                <li>Bebidas nacionales</li>
                <li>Buffet</li>
              </ul>
            </div>
            <div class="caption">
              <h4><a href="#" class="captionTitle">Hotel Azteca-inn</a></h4>
              <div class="detailsInfo">
                <h5>
                  <span>Precio por noche</span>
                  $1,400
                </h5>
                <ul class="list-inline detailsBtn">
                  <li><a href="hotel-detail" class="btn buttonTransparent">Detalles</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xs-12">
          <div class="thumbnail deals">
            <img src="images/hotels/corso.jpg" alt="deal-image">
            <a href="#" class="pageLink"></a>
            <div class="discountInfo discountCol-3">
              <ul class="list-inline rating homePage">
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
              </ul>
              <ul class="list-inline duration">
                <li>Alberca</li>
                <li>Playa privada</li>
              </ul>
            </div>
            <div class="caption">
              <h4><a href="#" class="captionTitle">Hotel Corso</a></h4>
              <div class="detailsInfo">
                <h5>
                  <span>Precio por noche</span>
                  $2,299
                </h5>
                <ul class="list-inline detailsBtn">
                  <li><a href="hotel-detail" class="btn buttonTransparent">Detalles</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xs-12">
          <div class="thumbnail deals">
            <img src="images/hotels/costa-del-sol.jpg" alt="deal-image">
            <a href="#" class="pageLink"></a>
            <div class="discountInfo discountCol-3">
              <ul class="list-inline rating homePage">
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
              </ul>
              <ul class="list-inline duration">
                <li>Barra libre</li>
              </ul>
            </div>
            <div class="caption">
              <h4><a href="#" class="captionTitle">Hotel Costal del Sol</a></h4>
              <div class="detailsInfo">
                <h5>
                  <span>Precio por noche</span>
                  $1,999
                </h5>
                <ul class="list-inline detailsBtn">
                  <li><a href="hotel-detail" class="btn buttonTransparent">Detalles</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packagesSection">
    <br><br><br>
    <div class="container">
      <div class="jumbotron home-jumbotron">
        <div class="row">
          <div class='col-md-offset-2 col-md-8'>
            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
              <!-- Bottom Carousel Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#quote-carousel" data-slide-to="1"></li>
                <li data-target="#quote-carousel" data-slide-to="2"></li>
              </ol>
              <!-- Carousel Slides / Quotes -->
              <div class="carousel-inner">
                <!-- Quote 1 -->
                <div class="item active">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-3 text-center">
                        <img class="img-circle" src="http://www.roofingcontractor.com/ext/resources/images/authors/Courtney-Dobson-Headshot-square.jpg?1449241605" style="width: 100px;height:100px;">
                      </div>
                      <div class="col-sm-9">
                        <p>Si quieres un lugar para reunirte con tus amigos para platicar, comer y pasar un buen rato, Mi Viejo Molino es ideal para ti.</p>
                        <small>Margarita Cabrera</small>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- Quote 2 -->
                <div class="item">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-3 text-center">
                        <img class="img-circle" src="https://www.deluxe.com/blog/wp-content/uploads/2015/02/andrew_niekamp_profile.jpg" style="width: 100px;height:100px;">
                      </div>
                      <div class="col-sm-9">
                        <p>Una opción interesante, un sabor agradable, la atención esmerada y la mesa hasta que se acabe...</p>
                        <small>Dionisio Contreras</small>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- Quote 3 -->
                <div class="item">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-3 text-center">
                        <img class="img-circle" src="https://prod-chuffedcontent.s3.amazonaws.com/images%2Fthumb_IkVMSXxhgxautLS6Uo_PLHEADSHOT2016.jpg" style="width: 100px;height:100px;">
                      </div>
                      <div class="col-sm-9">
                        <p>La atención es excelente! El servicio nos encantó y la comida es deliciosa! Muy recomendable.</p>
                        <small>Jan Matson</small>
                      </div>
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>                          
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
  </section>

  <!-- FOOTER -->
  @include('content.footer')
  

@endsection


{{-- include a modales --}}