@extends('layouts.main')

@section('content')
  
  <!-- HEADER -->
  @include('content.header', array('headerClass'=>'lightHeader')) 
  

  <!-- PAGE TITLE -->
  <section class="pageTitle about-page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="titleTable">
            <div class="titleTableInner">
              <div class="pageTitleInfo">
                <h1>HISTORIAS COMPARTIDAS</h1>
                <p>Cultural / Diversión / Entre amigos / Mar y Sol</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PAGE CONTENT -->
  <section class="mainContentSection">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail blogPostItem">
            <img src="images/shared_stories/copacabana-hotel.jpg" alt="blog-image">
            <div class="caption">
              <h3><a  href="#" class="blogTitle">Hotel Copacabana</a></h3>
              <ul class="list-inline blogInfo">
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Verónica Gutiérrez</a></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 20, 2016</li>
              </ul>
              <p>Todos son muy amables... 1 que otro un poco cortante pero nada grosero... Todoooo el prtsonal siempre preguntaban como estabamos. Hay unos lugares en la piscina que no huelen bien.. pero nos pudimos dar cuenta que en tooooooddddooo Cancun hay lugares donde huelen feo. Suponemos que es el canal.Nuestra habitacion siempre estuvo limpia, con los insumos necesarios, con bebidas y animalitos de toallas.</p>
              <a href="#" class="btn buttonTransparent">Ver historia...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail blogPostItem">
            <img src="images/shared_stories/hacienda-hotel.jpg" alt="blog-image">
            <div class="caption">
              <h3><a  href="#" class="blogTitle">Hotel Hacienda</a></h3>
              <ul class="list-inline blogInfo">
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Miguel Aguirre</a></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>Ene 3, 2014</li>
              </ul>
              <p>Muy buen lugar con excelentes cuartos, excelente variedad de alimentos y bebidas en sus diversos restaurantes, y con playa hermosa. La piscina no se queda atrás y es excelente que haya diversión planificada, bebidas y también se pueda jugar. Es extremadamente cómodo, el precio es un poco alto pero es en general muy buena opción.</p>
              <a href="#" class="btn buttonTransparent">Ver historia...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail blogPostItem">
            <img src="images/shared_stories/krystal-acapulco.jpg" alt="blog-image">
            <div class="caption">
              <h3><a  href="#" class="blogTitle">Hotel Krystal Acapulco</a></h3>
              <ul class="list-inline blogInfo">
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Thelma Morgan</a></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>Dic 11, 2014</li>
              </ul>
              <p>Creo que Ustedes si saben hacer turismo.Este Ha sido el mejor de los viajes que he tenido en mi vida..el personal que ustedes tienen para la atencion al cliente en restaurantes bares y demas sitios del hotel es el mejor del mundo...nunca vi caras aburridas o largas siempre unas personas muy sonrrientes, alegres .Amables con muy buen trato para los clientes el hotel super limpio..muy bien equipado..</p>
              <a href="#" class="btn buttonTransparent">Ver historia...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail blogPostItem">
            <img src="images/shared_stories/krystal-cancun.jpg" alt="blog-image">
            <div class="caption">
              <h3><a  href="#" class="blogTitle">Hotel Krystal Cancún</a></h3>
              <ul class="list-inline blogInfo">
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Roberto Lara</a></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>Jul 26, 2016</li>
              </ul>
              <p>La atención del personal excelente muy amables, atentos y respetuosos. Alimentación para todos los gustos deliciosa. Musica en vivo por la noche bellísimas voces</p>
              <a href="#" class="btn buttonTransparent">Ver historia...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail blogPostItem">
            <img src="images/shared_stories/vallarta-hotel.jpg" alt="blog-image">
            <div class="caption">
              <h3><a  href="#" class="blogTitle">Hotel Vallarta</a></h3>
              <ul class="list-inline blogInfo">
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Joseline Mata</a></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>Abr 19, 2015</li>
              </ul>
              <p>Las habitaciones están bien equipadas, el personal es eficiente, pero creo que les falta mucho en lo que se refiere al entretenimiento para los huéspedes, sobre todo en los espectáculos nocturnos, no son de buena calidad, al contrario, demasiado simples.</p>
              <a href="#" class="btn buttonTransparent">Ver historia...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="thumbnail blogPostItem">
            <img src="images/shared_stories/villas-hotel.jpg" alt="blog-image">
            <div class="caption">
              <h3><a  href="#" class="blogTitle">Hotel Villas</a></h3>
              <ul class="list-inline blogInfo">
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Carlos Dávalos</a></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>Oct 22, 2016</li>
              </ul>
              <p>Una experiencia maravillosa, buen trato y magnifico entretenimiento. La comida deliciosa y la limpiesa de los cuartos muy puntual y organizada. Solo una sugerencia, el colchon (matre) de la cama un poco duro no a mi comodidad. En general, excelente estadia.</p>
              <a href="#" class="btn buttonTransparent">Ver historia...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row hide">
        <div class="col-xs-12">
          <div class="paginationCenter paginationTransparent">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Previous</span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">...</a></li>
              <li><a href="#">9</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">Next<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <!-- FOOTER -->
  @include('content.footer')
  

@endsection


{{-- include a modales --}}