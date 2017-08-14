@extends('layouts.main')

@section('content')
  
  <!-- HEADER -->
  @include('content.header', array('headerClass'=>'lightHeader')) 
  

  <!-- PAGE TITLE -->
  <section class="pageTitle hotel-detail-page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="titleTable">
            <div class="titleTableInner">
              <div class="pageTitleInfo">
                <h1>HOTEL RITZ</h1>
                <p>Ven a vivir una experiencia inolvidable.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PAGE CONTENT -->
  <section class="mainContentSection singlePackage">
    <div class="container">
      <div class="row ">
        <div class="col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-xs-12">
              <div id="package-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#package-carousel" data-slide-to="0" class=""></li>
                  <li data-target="#package-carousel" data-slide-to="1" class=""></li>
                  <li data-target="#package-carousel" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item ">
                    <img alt="First slide" src="images/hotels/detail/2.jpg">
                  </div>
                  <div class="item active">
                    <img alt="Second slide" src="images/hotels/detail/1.jpg">
                  </div>
                  <div class="item ">
                    <img alt="Third slide" src="images/hotels/detail/3.jpg">
                  </div>
                </div>
                <a class="left carousel-control" href="#package-carousel" data-slide="prev"><span class="glyphicon glyphicon-menu-left"></span></a>
                <a class="right carousel-control" href="#package-carousel" data-slide="next"><span class="glyphicon glyphicon-menu-right"></span></a>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="hotelDescription">
                <div class="hotelTitle">
                  <h2>Detalles</h2>
                  <p>Cuenta con alberca y asoleadero frente al mar y con acceso directo a la playa. Sus confortables instalaciones están especialmente acondicionadas, para rodearle a usted y su familia de las necesarias comodidades y seguridad, para que durante su estancia solo piense en diversión y descanso.</p>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <ul class="descriptionList">
                      <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Estacionamiento.</li>
                      <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Bares.</li>
                      <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Restaurantes.</li>
                      <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Alberca con chapoteadero.</li>
                      <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Extensa área de playa.</li>
                      <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Cuarto de ejercicios.</li>
                      <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Salón para reuniones.</li>
                    </ul>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <ul class="descriptionList">
                     <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Valet parking.</li>
                     <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Servicio médico.</li>
                     <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Lavandería y tintorería.</li>
                     <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Servicio de niñera.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="roomsTypes">
                <div class="hotelTitle">
                  <h2>TIPOS DE HABITACIONES</h2>
                  <p>Todas nuestras habitaciones cuentan con aire acondicionado y TV por cable.</p>
                </div>
                <div class="roomCategory">
                  <div class="roomTitle">
                    <h4>Doble</h4>
                    <p>Esta clase de habitaciones son para dos personas. Las camas varían, pueden ser matrimoniales o dos camas individuales independientes.</p>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-9">
                      <ul class="roomAdvantage">
                        <li><a href="#"><img src="img/packages/shape-icon-1.png" alt="Image">Buffet</a></li>
                        <li><a href="#"><img src="img/packages/shape-icon-2.png" alt="Image">Tv por cable</a></li>
                        <li><a href="#"><img src="img/packages/shape-icon-3.png" alt="Image">Wifi</a></li>
                      </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                      <div class="roomRate">
                        Por noche: <span>$3,299</span>
                      </div>
                    </div>
                  </div>
                  <div class="roomGellary">
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img1.jpg"><img src="img/packages/double-room-img1.jpg" alt="Double Room"></a>
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img2.jpg"><img src="img/packages/double-room-img2.jpg" alt="Double Room"></a>
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img3.jpg"><img src="img/packages/double-room-img3.jpg" alt="Double Room"></a>
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img4.jpg"><img src="img/packages/double-room-img4.jpg" alt="Double Room"></a>
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img5.jpg"><img src="img/packages/double-room-img5.jpg" alt="Double Room"></a>
                  </div>
                </div>
                <hr>
                <div class="roomCategory">
                  <div class="roomTitle">
                    <h4>Sencilla</h4>
                    <p>Ideal para quienes viajan solos. No tienes más espacio del que necesitas, y además el precio se adecúa a las necesidades de todos aquellos huéspedes que buscan tener un lugar tranquilo para descansar en sus viajes de placer o negocios.</p>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-9 ">
                      <ul class="roomAdvantage">
                        <li><a href="#"><img src="img/packages/shape-icon-1.png" alt="Image">Buffet</a></li>
                        <li><a href="#"><img src="img/packages/shape-icon-2.png" alt="Image">Tv por cable</a></li>
                        <li><a href="#"><img src="img/packages/shape-icon-3.png" alt="Image">Wifi</a></li>
                      </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                      <div class="roomRate">
                        Por noche: <span>$2,900</span>
                      </div>
                    </div>
                  </div>
                  <div class="roomGellary">
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img1.jpg">
                      <img src="img/packages/double-room-img1.jpg" alt="Double Room">
                    </a>
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img2.jpg"><img src="img/packages/double-room-img2.jpg" alt="Double Room"></a>
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img3.jpg"><img src="img/packages/double-room-img3.jpg" alt="Double Room"></a>
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img4.jpg"><img src="img/packages/double-room-img4.jpg" alt="Double Room"></a>
                    <a class="fancybox-pop" rel="portfolio-1" href="img/packages/double-room-img5.jpg"><img src="img/packages/double-room-img5.jpg" alt="Double Room"></a>
                  </div>
                </div>
              </div>
              <div class="location">
                <div class="hotelTitle">
                  <h2>Ubicación</h2>
                  <p>Av Costera Miguel Alemán No.159, Magallanes, 39670 Acapulco, Guerrero.</p>
                </div>
                <div class="mapAria">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14838.626014458358!2d-99.88677719101518!3d16.858190384482054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85caf7e5dc1bbb25%3A0x4b8219727d13871a!2sRitz+Acapulco!5e0!3m2!1ses!2smx!4v1502255301257" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="reviewSection">
                <div class="reviewContent">
                  <h3 class="reviewTitle">
                    Reseñas (3)
                      <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </span>
                  </h3>

                  <div class="reviewMedia">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="images/comments/2.jpg" alt="Image">
                          </a>
                        </div>
                        <div class="media-body">
                          <h5 class="media-heading">Jonh Lyan</h5>
                          <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                          </span>
                          <p>Esta es la segunda ocasión en la que visitamos Ritz Acapulco. En general el hotel cumple para pasar unas vacaciones agradables en familia sin grandes pretensiones. Siendo justos hay que decidir que ofrece una buena relación calidad-precio para un hotel todo incluido.</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="images/comments/1.jpg" alt="Image">
                          </a>
                        </div>
                        <div class="media-body">
                          <h5 class="media-heading">Carlos Beltrán</h5>
                          <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </span>
                          <p>Es un Hotel muy cómodo, limpio y un buen servicio como tiene todo incluido no tuve que salir a comprar cosas, te la pasas muy bien, se los recomiendo si tienes pensado estar solamente en el hotel.</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="images/comments/3.jpg" alt="Image">
                          </a>
                        </div>
                        <div class="media-body">
                          <h5 class="media-heading">Rebeca Lara</h5>
                          <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-0" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                          </span>
                          <p>Muy lindo hotel amables todos desde la recepcion hasta los de seguridad muy atentos en todo el hotel,la comida muy buena y variada.</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <form action="" method="POST" role="form" class="commentsForm">
                    <h3 class="reviewTitle">Déjanos tu reseña</h3>
                    <p>¿Cómo lo calificas? <span>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-0" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span></p>
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="form-group">
                          <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn buttonCustomPrimary">ENVIAR</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <aside class="col-sm-4 col-xs-12">
          <div class="singleHotelSidebar">
            <div class="panel panel-default">
              <div class="panel-heading">Reservación</div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-12 col-xs-4" for="inputSuccess3">LLegada:</label>
                        <div class="col-md-8 col-sm-12 col-xs-8 datepickerWrap">
                          <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                            <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                            <div class="input-group-addon">
                              <span class="fa fa-calendar"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-12 col-xs-4" for="inputSuccess3">Salida:</label>
                        <div class="col-md-8 col-sm-12 col-xs-8 datepickerWrap">
                          <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                            <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                            <div class="input-group-addon">
                              <span class="fa fa-calendar"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-12 col-xs-4" for="inputSuccess3">Habitación:</label>
                        <div class="col-md-8 col-sm-12 col-xs-8 datepickerWrap">
                          <div class="searchFilter">
                            <select name="guiest_id3" id="guiest_id3" class="select-drop">
                              <option value="0">Sencilla</option>
                              <option value="1">Doble</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-12 col-xs-4" for="inputSuccess3">Personas:</label>
                        <div class="col-md-8 col-sm-12 col-xs-8 datepickerWrap">
                          <div class="count-input">
                              <a class="incr-btn" data-action="decrease" href="#">–</a>
                              <input class="quantity" type="text" value="1">
                              <a class="incr-btn" data-action="increase" href="#">+</a>
                            </div>
                        </div>
                      </div>
                      <div class="totalCost">
                        <div class="col-xs-8 totalCostLeft">
                          <p>Total</p>
                        </div>
                        <div class="col-xs-4 totalCostRight">$4,699</div>
                      </div>
                      <div class="col-sm-12">
                        <br>
                        <a href="#" class="btn btn-block buttonCustomPrimary">Reservar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  
  <!-- FOOTER -->
  @include('content.footer')
  

@endsection


{{-- include a modales --}}