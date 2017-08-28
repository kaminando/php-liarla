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

  <!-- PROFILE UPDATE -->
  <section class="settingSection fix-width-100">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-4 center">
          <div class="updateProfileImg">
            @if (Auth::user()->social_user)
              <img class="img-responsive" src="<?= str_replace('type=normal', 'type=large', Auth::user()->photo) ?>" alt="Foto de perfil.">
              @elseif ( Auth::user()->photo )
                <img class="img-responsive" src="{{ Auth::user()->photo }}" alt="">
              @else
                <img class="img-responsive" src="images/profile/profile-holder.png" alt="">
            @endif
          </div>

        </div>
        <div class="col-xs-12 col-sm-8">
          <div class="settingContent bg-ash">
            {!! Form::open(['url' => 'update-profile', 'class' => 'form']) !!}
              <h4>ACTUALIZACIÓN DE PERFIL</h4>
              <div class="changePassword">
                <p>Nombre*</p>
                <div class="row">
                    <div class="col-sm-12{{ $errors->has('name') ? ' has-error' : '' }}">
                      <input name="name" value="{{ Auth::user()->name }}" type="text" class="form-control" id="inputPassword3" placeholder="Nombre(s)">
                      @if ($errors->has('name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                    </div>
                    <div class="col-sm-12">
                      <input name="last_name" value="{{ Auth::user()->last_name }}" type="text" class="form-control" id="inputPassword3" placeholder="Apellidos">
                    </div>
                </div>
              </div>
              <hr>
              <div class="changeEmail">
                <p>Dirección</p>
                <div class="row">
                    <div class="col-sm-12">
                      <input name="country" value="{{ Auth::user()->country }}" type="text" class="form-control" id="inputPassword3" placeholder="País">
                    </div>
                    <div class="col-sm-12">
                      <input name="zip_code" value="{{ Auth::user()->zip_code }}" type="text" class="form-control" id="inputPassword3" placeholder="Código Postal">
                    </div>
                    <div class="col-sm-12">
                      <input name="address" value="{{ Auth::user()->address }}" type="text" class="form-control" id="inputPassword3" placeholder="Dirección">
                    </div>
                </div>
              </div>
              <hr>
              <div class="changeEmail">
                <p>Personal</p>
                <div class="row">
                    <div class="col-sm-12">
                      <input name="telephone" value="{{ Auth::user()->telephone }}" type="text" class="form-control" id="inputPassword3" placeholder="Teléfono">
                    </div>
                    <div class="col-sm-12">
                      <input name="profession" value="{{ Auth::user()->profession }}" type="text" class="form-control" id="inputPassword3" placeholder="Profesión">
                    </div>
                    <div class="form-group col-sm-12">
                      <textarea name="self_description" class="form-control not-resize personla-desc-upd" id="" placeholder="Descripción personal">{{ Auth::user()->self_description }}</textarea>
                    </div>
                    <div class="col-sm-12">
                      <button type="submit" class="btn buttonTransparent">Actualizar</button>
                    </div>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  @include('content.footer')
  

@endsection


{{-- include a modales --}}