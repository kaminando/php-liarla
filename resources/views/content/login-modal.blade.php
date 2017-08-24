<div class="modal fade signupLoging" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalContentCustom">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inicia Sesión</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control bg-ash" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control bg-ash" name="password" placeholder="Contraseña">
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
            </label>
            <a class="forgotPass clerfix hide" href="">¿Olvidaste tu contraseña?</a>
          </div>
          <button type="submit" class="btn btn-default">Entrar</button>
        </form>
        <div class="or">
          o
        </div>
        <a class="btn btn-default btnSocial"  href="login/facebook">Inicia con Facebook</a>
      </div>
    </div>
  </div>
</div>
