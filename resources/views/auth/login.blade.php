@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('NMVFIS')])

@section('content')

<div class="row auth-height">
  <div class="col-lg-4 col-md-6 col-sm-8" style="padding: 0px!important;">
    <form class="form" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="card card-login card-hidden mb-3" style="height: 100%!important; margin: 0px!important">
        <div class="card-header text-center" style="margin: 20px 0px 15px">
          <h2 class="card-title"><strong><a href="/" style="color: #5156be">{{ __('NMVFIS') }}</a></strong></h2>
        </div>
        <div style="width: 70%; margin: 0px auto 10px; border-bottom: 1px solid #5156be9e"></div>
        <div class="card-body" style="padding: 20px 60px!important">
          <div style="text-align: center; margin-bottom: 30px">
            <h4><strong>Welcome Back!</strong></h4>
            <p class="card-description text-center">Sign in to continue to Paymara.</p>
          </div>
          <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" style="padding: 0px 15px 0px 0px">
                  <i class="material-icons">email</i>
                </span>
              </div>
              <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="" required>
            </div>
            @if ($errors->has('email'))
              <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                <strong>{{ $errors->first('email') }}</strong>
              </div>
            @endif
          </div>
          <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} " style="margin-top: 30px">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" style="padding: 0px 15px 0px 0px">
                  <i class="material-icons">lock_outline</i>
                </span>
              </div>
              <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="" required>
            </div>
            @if ($errors->has('password'))
              <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                <strong>{{ $errors->first('password') }}</strong>
              </div>
            @endif
          </div>
          <div class="justify-content-center" style="margin: 35px 0px 5px 0px">
            <button type="submit" class="btn" style="width: 100%; font-size: 14px; background-color: #5156be">{{ __('Log In') }}</button>
          </div>
          <div style="text-align: right; margin-right: 20px; margin-bottom: 20px">
            <p class="card-description" style="text-align: right">
              <strong><a href="{{ route('register') }}" style="color: grey!important">{{ __('Forgot password ?') }}</a></strong>
            </p>
          </div>
          <div style="text-align: center; margin-bottom: 30px">
            <p class="card-description text-center">Don't have an account ?
              <strong><a href="{{ route('register') }}">{{ __('Signup now') }}</a></strong>
            </p>
          </div>
          
        </div>
        <div style="text-align: center; margin-bottom: 30px">
            <p>~ NMVFIS . Crafted with <i class="material-icons" style="font-size: 14px; color: #fd625e">favorite</i>  by NMVFIS ~</p>
          </div>
      </div>
    </form>
  </div>
  <div class="page-header login-page  header-filter col-lg-8 col-md-6 col-sm-4" filter-color="black" style="height: 100%; background-image: url('{{ asset('material') }}/img/background.jpg'); background-size: cover; background-position: top center; padding: 0px!important" data-color="purple">
  </div>
</div>
<!-- <div class="container">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Login') }}</strong></h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <p class="card-description text-center">{{ __('Or Sign in with ') }} <strong>hello@gmail.com</strong> {{ __(' and the password ') }}<strong>123123123</strong> </p>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Lets Go') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-6">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-light">
                    <small>{{ __('Forgot password?') }}</small>
                </a>
            @endif
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('register') }}" class="text-light">
                <small>{{ __('Create new account') }}</small>
            </a>
        </div>
      </div>
    </div>
  </div>
</div> -->
@endsection
