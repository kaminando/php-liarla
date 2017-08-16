<header>
  <nav class="navbar navbar-default navbar-main navbar-fixed-top {{ $headerClass }}" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <img src="images/logo.png">
          <span class="main">LIARLA</span>
          <span class="second">taking care of your destiny</span>
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown singleDrop active ">
            <a href="/">INICIO</a>
          </li>
          <li class="dropdown singleDrop ">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXPLORA <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class=""><a href="shared-stories">Historias compartidas</a></li>
              <li class=""><a href="#">Hoteles</a></li>
              <li class=""><a href="#">Paquetes</a></li>
              <li class="dropdown dropdown-submenu ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Vuelos <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                <ul class="dropdown-menu ">
                  <li class=""><a href="#">Nacionales</a></li>
                  <li class=""><a href="#">Internacionales</a></li>
                  <li class=""><a href="#">Con descuentos</a></li>
                </ul>
              </li>
              <!-- Destinations -->
              <li class="dropdown dropdown-submenu ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Tours <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li class=""><a href="#">Todo pagado</a></li>
                  <li class=""><a href="#">Sencillos</a></li>
                </ul>
              </li>
              <li><a href="#">Cruceros</a></li>
              <li><a href="#">Ofertas</a></li>
            </ul>
          </li>

          @if (Auth::guest())
            <li class="dropdown singleDrop ">
              <a href="" data-toggle="modal" data-target="#signup"><i class="fa fa-user" aria-hidden="true"></i> CREA TU CUENTA</a>
            </li>
            <li class="dropdown singleDrop ">
              <a href="" data-toggle="modal" data-target="#login"><i class="fa fa-check" aria-hidden="true"></i> INICIA SESIÓN</a>
            </li>
          @endif
          <li class="dropdown singleDrop ">
            <a href="about-us">QUIENES SOMOS</a>
          </li>
          <li class="dropdown singleDrop ">
            <a href="contact" ><i class="fa fa-phone" aria-hidden="true"></i> CONTACTO</a>
          </li>

          @if (Auth::check())
            <li class="dropdown singleDrop ">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}&nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="dashboard">Dashboard</a></li>
              <li><a href="profile">Perfil</a></li>
              <li><a href="settings">Configuración</a></li>
              <li><a href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SALIR</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>