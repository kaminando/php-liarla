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
            @if (Auth::user()->social_user)
              <img class="img-responsive" src="<?= str_replace('type=normal', 'type=large', Auth::user()->photo) ?>" alt="Foto de perfil.">
              @elseif ( Auth::user()->photo )
                <img class="img-responsive" src="images/profile/{{ Auth::user()->photo }}" alt="">
              @else
                <img class="img-responsive" src="images/profile/profile-holder.png" alt="">
            @endif
          </div>
        </div>
        <div class="col-xs-12 col-sm-8">
          <div class="profileContent">
            <div class="editIconRight clearfix">
              <a href="update-profile"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </div>
            <div class="profileTitle">
              <h2>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h2>
              <span>{{ Auth::user()->profession }}</span>
            </div>
            <p>
              {{ Auth::user()->self_description }}
            </p>
            <div class="profileInfo">
              <p><strong>Teléfono: </strong>{{ Auth::user()->telephone }}</p>
              <p><strong>Dirección: </strong>{{ Auth::user()->address }}</p>
              <p><strong>Código Postal: </strong>{{ Auth::user()->zip_code }}</p>
              <p><strong>País: </strong>{{ Auth::user()->country }}</p>
              <p><strong>Email: </strong>{{ Auth::user()->email }}</p>
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