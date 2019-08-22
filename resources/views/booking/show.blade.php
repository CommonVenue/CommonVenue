@extends('layouts.master')

@section('content')
  <!--login Modal-->
  <div class="modelbackground"></div>
  <div class="modal fade pt-9" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      <!-- header -->
        <button type="button" class="close text-right" data-dismiss="modal">&times;</button>


        <!-- body -->
        <div class="modal_body pt-7">
          <div class="Modal_heading ">
            <h3 class="modal_title text-center">Sign in to book this space</h3>
            <p class="modal_para text-center">You won't be able to book a venue unless you login.</p>
          </div>
          <div class="signup_form">
            <form class="text-center" novalidate="" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="Email">
                <input type="email" class="eMail @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
              </div>
              <div class="Password">
                <input type="password" class="passWord @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Log In') }}</button>
              </div>
            </form>
          </div>
          <div class="form-footer text-center">
            <p class="footer-text">Don't have an account?<span><a href="/register">Sign up</a></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!---Login modal end-->
<section class="site_section_wrapper py-0">
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			<div class="site_sticky_col col-lg-6">
				<div class="site_venue_space_carousel owl-carousel owl-theme">
					<div class="item">
						<img src="{{ asset('/images/'.$property->image) }}" class="img-fluid w-100" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="site_venue_space_detail_content">
					<h1 class="site_venue_space_detail_title">{{ $property->name }}</h1>
					<div class="mb-4">
						<form>
							<div class="row">
								<div class="col-lg-3 mb-4">
									<label>Date</label>
									<div class="form-control rounded-0">{{ $booking->date }}</div>
								</div>
								<div class="col-lg-3 mb-4">
									<label>Start</label>
									<div class="form-control rounded-0">{{ $booking->from_date }}</div>
								</div>
								<div class="col-lg-3 mb-4">
									<label>End</label>
									<div class="form-control rounded-0">{{ $booking->to_date }}</div>
								</div>
							</div>
						</form>
					</div>
					<div class="row mb-1">
						<div class="col-lg-6">
							<div class="site_vsd_price_title">Price</div>
						</div>
					</div>
					<div class="row mb-1">
						<div class="col">
							<div class="site_vsd_price_amount">${{ $booking->total_price }}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection