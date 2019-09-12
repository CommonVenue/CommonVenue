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
<section class="site_section_wrapper">
	<div class="container">
		<div class="site_search_fields_row row">
			<div class="col-lg-3 mb-4">
				<div class="site_input_group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id=""><i class="fas fa-search"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Meeting">
				</div>		  
			</div>
			<div class="col-lg-3 mb-4">
				<div class="site_input_group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id=""><i class="fas fa-map-marker-alt"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Toronto">
				</div>		  
			</div>
			<div class="col-lg-3 mb-4">
				<div class="site_input_group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id=""><i class="far fa-calendar-alt"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="When">
				</div>		  
			</div>
			<div class="col-lg-3 mb-4">
				<select class="form-control">
					<option value="0">Attendes</option>
					<option value="1">Attendes 1</option>
					<option value="2">Attendes 2</option>
				</select>
			</div>
			<div class="col-lg-3 mb-4">
				<select class="form-control">
					<option value="0">Price per hour</option>
					<option value="1">Price per hour 1</option>
					<option value="2">Price per hour 2</option>
				</select>
			</div>
			<div class="col-lg-3 mb-4">
				<select class="form-control">
					<option value="0">Rating</option>
					<option value="1">Rating 1</option>
					<option value="2">Rating 2</option>
				</select>
			</div>
			<div class="col-lg-3 mb-4">
				<select class="form-control">
					<option value="0">More filters</option>
					<option value="1">More filters 1</option>
					<option value="2">More filters 2</option>
				</select>
			</div>
			<div class="col-lg-3 mb-3">
				<div class="">
					<a href="#"><img src="{{ asset('/images/map.png') }}" class="img-fluid" alt=""></a>
				</div>
			</div>
		</div>
		<hr class="mt-2 mb-4">  
		<p class="site_search_showing_title mb-5">Showing 1-20 of 122 meeting spaces near Toronto</p>  
		<div class="row mb-5">
			@foreach($properties as $property)
			<div class="col-lg-3 mb-4">
				<div class="site_venue_box card">
					@foreach($property->images->take(1) as $image)
						<img src="{{ url('storage/images/'.$image->url) }}" class="card-img-top" alt="">
					@endforeach
					<div class="card-body">
						<p class="site_venue_title"><a href="{!! route('properties.show',[$property->id]) !!}">{{ $property->name }}</a></p>
						<p class="site_venue_address mb-1">{{ $property->address->country }} {{ $property->address->state }} {{ $property->address->city }}</p>
						<p class="site_venue_response">Responds within 2 hrs</p>  
						<div class="site_venue_rating mb-3">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star site_light_color"></i>
							<span>212</span>
						</div> 
						<div class="site_venue_price_row row">
							<div class="col">
								<div class="site_venue_prirce">${{ $property->price }} <span>/hr</span>
								</div>
							</div>  
							<div class="col">
								<div class="site_favorite_icon">
									<a href="#" data-id="{{ $property->id }}">
										@if (auth()->user())
											@if (isFavoriteProperty(Auth::user(), $property->id)) 
												<i class="like-{{$property->id}} fas fa-heart"></i>
											@else
												<i class="like-{{$property->id}} far fa-heart"></i>
											@endif
										@else
											<a href="#" class="login_modal"><i class="like-{{$property->id}} far fa-heart"></i></a>
										@endif
									</a>
								</div>
							</div>
						</div>  
					</div>
				</div>        
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-lg-12">
				<nav class="site_pagination_nav">
					<span class="site_pagination_show_title">Showing 1-20 of 122</span>
					<ul class="pagination justify-content-end">
						<li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
					</ul>
				</nav>			
			</div>
		</div>  
		<hr class="mb-4">
		<div class="row"><div class="col-lg-12 site_join_title"><p>Join our email list and be the first to know when we add new spaces.</p></div></div>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function() {
		$('[data-id]').click(function(e) {
			e.preventDefault();

			var self = $(this);
			var id = self.data('id');
			var url = 'favorite/properties/'+id;

			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				type: "GET",
				url: url,
				dataType: "JSON",
				data: { id: id },
				success: function(res) {
					if ( $('i.like-'+id).hasClass('far') ){
						$('i.like-'+id).removeClass('far');
						$('i.like-'+id).addClass('fas');
					}else {
						$('i.like-'+id).removeClass('fas');
						$('i.like-'+id).addClass('far');
					}
				},
				error: function(error) {
					console.log(error)
				}
			});
		});
		$('a.login_modal').click(function(e) {
			setTimeout(function(){
				$('#myModal').modal('show');
			});
		});
	})
</script>
@endsection