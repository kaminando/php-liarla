<div class="modal fade signupLoging" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalContentCustom">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crea tu cuenta</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input id="name" type="text" class="form-control bg-ash" name="name" value="{{ old('name') }}" placeholder="Nombre(s)" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <input id="last_name" type="text" class="form-control bg-ash" name="last_name" value="{{ old('last_name') }}" placeholder="Apellidos" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control bg-ash" name="email" value="{{ old('email') }}" placeholder="Email" required>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control bg-ash" name="password" placeholder="Contraseña" required>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
           <div class="form-group">
            <input id="password-confirm" type="password" class="form-control bg-ash" name="password_confirmation" placeholder="Confirmar contraseña" required>
          </div>
          <div class="checkbox">
            <label>
              Al registrarme en la plataforma manifiesto que estoy de acuerdo con los <a href="#">Términos y condiciones</a>
            </label>
          </div>
          <button type="submit" class="btn btn-default">REGISTRARSE</button>
        </form>
        <div class="or hide">
          o
        </div>
        <a class="btn btn-default btnSocial hide"  href="#">Inicia con Facebook</a>
      </div>
    </div>
  </div>
</div>