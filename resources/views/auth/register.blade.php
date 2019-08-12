@extends('layouts.app')

@section('content')

<!-- Content Start -->
<section class="site_fullheight_wrapper">
  <div class="container-fluid h-100 px-0">
    <div class="row h-100 no-gutters">
      <div class="col-lg-8 site_login_bg">
            <div class="site_login_content">
              <div class="site_login_content_box">
                  
            <div class="site_alerady_account_wrap">
              <div class="site_absoute_logo"><a href="../vendor/index.html"><img src="../vendor/images/logo.png" class="img-fluid"></a></div>
            </div>
                  
                <h1 class="site_login_content_title mb-3">Find your dream <br>
                  venue today.</h1>
                <p class="site_login_content_subtitle">Wafer dessert danish. Powder toffee cookie jelly beans bear claw <br>
                  jelly-o gingerbread halvah. and </p>
              </div>
            </div>
      </div>
      <div class="col-lg-4">
        <div class="site_login_wrapper">
          <div class="site_login_box">
            <div class="site_alerady_account_wrap">
              <ul class="list-inline">
                <li class="list-inline-item mr-4">Already have an account?</li>
                <li class="list-inline-item"><a href="/login">Sign in</a></li>
              </ul>
            </div>
            <div class="site_form_title_box mb-4">
              <h3 class="site_login_title mb-0">Sign up</h3>
            </div>
            <form class="site_access_form" novalidate="" method="POST" action="{{ route('register') }}">
                @csrf
              <div class="row mb-4">
                <div class="col">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="Phone Number">
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <div class="site_terms_check form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">I agree to Common Venue's Terms of Service and Policies</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-primary btn-block">{{ __('Sign up') }}</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Content end --> 

@endsection
