@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('NMVFIS')])

@section('content')

<div class="row auth-height">
  <div class="col-lg-5 col-md-6 col-sm-8" style="padding: 0px!important; height: 100%">
    <form class="form" method="POST" action="{{ route('register') }}">
      @csrf
      <div class="card card-login card-hidden mb-3" style=" margin: 0px!important">
        <div class="card-header text-center"  style="margin: 20px 0px 15px">
          <h2 class="card-title"><strong><a href="/" style="color: #5156be">{{ __('NMVFIS') }}</a></strong></h2>
        </div>
        <div style="width: 70%; margin: 0px auto 10px; border-bottom: 1px solid #5156be9e"></div>
        <div class="card-body" style="padding: 10px 40px!important">
          <div style="text-align: center;">
            <h4><strong>Register Account</strong></h4>
            <p class="card-description text-center">Get your free Paymara account now.</p>
          </div>
          <div class="row">
            <div class="bmd-form-group{{ $errors->has('userId') ? ' has-danger' : '' }} m-b-15 col-md-6 i-p-10">
              <div class="">
                  <label class="wallet-label">User Id</label>
                  <input class="form-group-control input-radius" type="text" name="userId" placeholder="{{ __('User Id') }}" value="{{ old('userId') }}" style="background-color: #e9e9ef" readonly> 
              </div>
              @if ($errors->has('userId'))
                <div id="userId-error" class="error text-danger pl-3" for="userId" style="display: block;">
                  <strong>{{ $errors->first('userId') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }} m-b-15  col-md-6 i-p-10">
              <div class="">
                  <label class="wallet-label">Full Name</label>
                  <input class="form-group-control input-radius" type="text" name="name" placeholder="{{ __('Full Name') }}" value="{{ old('name') }}" required> 
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="bmd-form-group{{ $errors->has('m-num') ? ' has-danger' : '' }} m-b-15 col-md-6 i-p-10">
              <div class="">
                  <label class="wallet-label">Mobile Number</label>
                  <input class="form-group-control input-radius" type="tel"  id="phone" name="m-num" placeholder="{{ __('Mobile Number') }}" value="{{ old('m-num') }}"> 
              </div>
              @if ($errors->has('m-num'))
                <div id="m-num-error" class="error text-danger pl-3" for="m-num" style="display: block;">
                  <strong>{{ $errors->first('m-num') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} m-b-15  col-md-6 i-p-10">
              <div class="">
                  <label class="wallet-label">Email</label>
                  <input class="form-group-control input-radius" type="email" name="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required> 
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="bmd-form-group{{ $errors->has('s-num') ? ' has-danger' : '' }} m-b-15 col-md-6 i-p-10">
              <div class="">
                  <label class="wallet-label">Sponsor's Id</label>
                  <input class="form-group-control input-radius" type="email" name="s-num" placeholder="{{ __('Sponsor`s Id') }}" value="{{ old('s-num') }}"> 
              </div>
              @if ($errors->has('s-num'))
                <div id="s-num-error" class="error text-danger pl-3" for="s-num" style="display: block;">
                  <strong>{{ $errors->first('s-num') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('position') ? ' has-danger' : '' }} m-b-15 col-md-6 i-p-10">
              <div class="">
                  <label class="wallet-label">Position</label>
                  <select class="form-select"  name="position">
                    <option disabled selected>Select Position</option>
                    <option value="0">Left</option>
                    <option value="1">Right</option>
                  </select>
              </div>
              @if ($errors->has('position'))
                <div id="position-error" class="error text-danger pl-3" for="position" style="display: block;">
                  <strong>{{ $errors->first('position') }}</strong>
                </div>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} m-b-15 col-md-6 i-p-10">
              <div class="">
                  <label class="wallet-label">Password</label>
                  <div style="display: flex">
                    <input class="form-group-control input-radius" type="password" name="password" id="password" placeholder="{{ __('Enter Password') }}">
                    <label class="input-group-text"><i class="fa fa-eye-slash" id="pwd-show" style="margin-left: -30px; cursor: pointer;"></i></label> 
                  </div>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} m-b-15 col-md-6 i-p-10">
              <div class="">
                  <label class="wallet-label">Confirm Password</label>
                  <div style="display: flex">
                    <input class="form-group-control input-radius" type="password" name="password_confirmation" id="password_confirmation" placeholder="{{ __('Enter Password') }}" required>
                    <label class="input-group-text"><i class="fa fa-eye-slash" id="pwd-c-show" style="margin-left: -30px; cursor: pointer;"></i></label>
                  </div>
                </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>
          </div>
          <div class="form-check mr-auto mt-3" style="margin: 0px">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
              <span class="form-check-sign">
                <span class="check"></span>
              </span>
              {{ __('I agree with the NMVFIS') }} <a href="#">{{ __('Terms of Use') }}</a>
            </label>
          </div>
          <div class="justify-content-center" style="margin: 5px 0px 5px 0px">
            <button type="submit" class="btn" style="width: 100%; font-size: 14px; background-color: #5156be">{{ __('Create account') }}</button>
          </div>
        </div>
        <div style="text-align: center;">
          <p class="card-description text-center">Already have an account ?
            <strong><a href="{{ route('login') }}">{{ __('Login') }}</a></strong>
          </p>
        </div>
      </div>
    </form>
  </div>
  <div class="page-header login-page  header-filter col-lg-7 col-md-6 col-sm-4" filter-color="black" style="height: 100%; background-image: url('{{ asset('material') }}/img/background.jpg'); background-size: cover; background-position: top center; padding: 0px!important" data-color="purple">
  </div>
</div>
@endsection
