@extends('layouts.main')

@section('content')
  
  <!-- HEADER -->
  @include('content.header') 
  

  <!-- BANNER -->
  <section class="bannercontainer home-cover">
    <div class="fullscreenbanner-container">
      <div class="fullscreenbanner">
        <ul>
          <li data-transition="parallaxhorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
            <img src="img/home/slider/long-weekend-ideas-plans.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
            <div class="slider-caption container">
              <div class="tp-caption rs-caption-1 sft start"
                data-hoffset="0"
                data-y="270"
                data-speed="800"
                data-start="1000"
                data-easing="Back.easeInOut"
                data-endspeed="300">
                Ve hasta donde
                <span>otros han ido</span>
              </div>
              <div class="tp-caption rs-caption-2 sft"
                data-hoffset="0"
                data-y="400"
                data-speed="1000"
                data-start="1500"
                data-easing="Power4.easeOut"
                data-endspeed="300"
                data-endeasing="Power1.easeIn"
                data-captionhidden="off">
                ¿Qué tan lejos sabes que puedes llegar?
              </div>
              <div class="tp-caption rs-caption-3 sft"
                data-hoffset="0"
                data-y="485"
                data-speed="800"
                data-start="2000"
                data-easing="Power4.easeOut"
                data-endspeed="300"
                data-endeasing="Power1.easeIn"
                data-captionhidden="off">
              </div>
            </div>
          </li>
          <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
            <img src="img/home/slider/india.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
            <div class="slider-caption container">
              <div class="tp-caption rs-caption-1 sft start text-center"
                data-hoffset="0"
                data-x="center"
                data-y="270"
                data-speed="800"
                data-start="1000"
                data-easing="Back.easeInOut"
                data-endspeed="300">
                Lo que hacemos, porqué lo hacemos,
                <span>dónde, por tí!</span>
              </div>
              <div class="tp-caption rs-caption-2 sft text-center"
                data-hoffset="0"
                data-x="center"
                data-y="400"
                data-speed="1000"
                data-start="1500"
                data-easing="Power4.easeOut"
                data-endspeed="300"
                data-endeasing="Power1.easeIn"
                data-captionhidden="off">
                "Te descubrimos el mundo..."
              </div>
              <div class="tp-caption rs-caption-3 sft text-center"
                data-hoffset="0"
                data-x="center"
                data-y="485"
                data-speed="800"
                data-start="2000"
                data-easing="Power4.easeOut"
                data-endspeed="300"
                data-endeasing="Power1.easeIn"
                data-captionhidden="off">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <section class="darkSection desk-search-bar no-xs">
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
              <div class="col-sm-3 col-xs-12">
                <div class="input-group date text-search" >
                  <input type="text" class="form-control currency" placeholder="Presupuesto">
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
            <a href="search.html" class="btn btn-block buttonCustomPrimary">Buscar</a>
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
            <div class="col-sm-3 col-xs-12">
              <div class="searchTour">
                <select name="guiest_id3" id="guiest_id3" class="select-drop">
                  <option selected disabled value="-1">Presupuesto</option>
                  <option value="1">$1400 - $2000</option>
                  <option value="2">$1600 - $2000</option>
                </select>
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

  <!-- PAGE CONTENT -->
  <section class="mainContentSection packagesSection">
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
                  <li><a href="single-package-right-sidebar.html" class="btn buttonTransparent">Detalles</a></li>
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
                  <li><a href="#" class="btn buttonTransparent">Detalles</a></li>
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
                  <li><a href="single-package-left-sidebar.html" class="btn buttonTransparent">Detalles</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packagesSection">
    <div class="container">
      <div class="jumbotron home-jumbotron">
        <h3 class="section-header center">Cómo funciona</h3>
        <p class="section-header center">Descubre como podemos ayudarte a encontrar lo que no sabes que deseas!.</p>
        <br>
        <div class="row">
          <div class="col-md-4 inf">
            <div>
              <br>
              <h4>Ingresa tu presupuesto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet diam nec mi dictum, gravida venenatis eros consequat. Maecenas est enim, ultrices et lacus a, semper dictum orci. Morbi malesuada est eu nisi varius, sit amet pulvinar leo eleifend.</p>
            </div>
            
          </div>
          <div class="col-md-4 inf">
            <div>
              <br>
              <h4>Explora destinos</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet diam nec mi dictum, gravida venenatis eros consequat. Maecenas est enim, ultrices et lacus a, semper dictum orci. Morbi malesuada est eu nisi varius, sit amet pulvinar leo eleifend.</p>
            </div>
          </div>
          <div class="col-md-4 inf">
            <div>
              <br>
              <h4>Encuentra los mejores vuelos</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet diam nec mi dictum, gravida venenatis eros consequat. Maecenas est enim, ultrices et lacus a, semper dictum orci. Morbi malesuada est eu nisi varius, sit amet pulvinar leo eleifend.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packagesSection liarla-interested">
    <br><br>
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