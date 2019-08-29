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
					<div class="row mb-4">
						<div class="site_venue_space_detail_col col-lg-9">
							<p class="site_venue_space_detail_location"><i class="fas fa-map-marker-alt mr-2"></i> {{ $property->address->country }}, {{ $property->address->state }}, {{ $property->address->city }}, {{ $property->address->street_1 }}</p>	
							<ul class="site_venue_space_detail_meta list-inline">
								<li class="list-inline-item">
									<div class="site_venue_rating mb-3">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star site_light_color"></i>
										<span class="site_venue_rewiews">212 reviews</span>
									</div>					  
								</li>
								<li class="list-inline-item">
									<i class="fas fa-user-friends mr-1"></i> 22
								</li>	
								<li class="list-inline-item">
									<i class="far fa-clock mr-1"></i> 1hr
								</li>	
							</ul>
						</div>
						<div class="site_venue_space_detail_favorite_col col-lg-3">
							<div class="d-flex h-100">
								<div class="site_venue_space_detail_favorite">
									<span>+Save</span>
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
						<div class="col-lg-12">
							<div class="site_venue_space_detail_description">
								<p>{{ $property->description }}</p>
								<hr class="my-4">
								<a href="#" class="btn btn-dark site_btn_lg">Amenities</a>
							</div>
						</div>
					</div>
					<div id="collapseExample" class="site_venue_space_detail_services row no-gutters">
						@foreach($amenities as $amenity)
						<div class="col-lg-3 mb-4">
							<div class="site_venue_space_detail_services_box">
								{!! $amenity->icon !!} {{ $amenity->name }} 
							</div>
						</div>
						@endforeach
					</div>
					<div class="row">
						<div class="col-lg-12">
							<hr class="my-4">
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-lg-12">
							<ul class="list-inline mb-0">
								<li class="list-inline-item">
									@if (auth()->user())
										<a href="/properties/{{$property->id}}/booking" class="btn btn-dark site_btn_lg">Booking</a>
									@else
										<a href="#" class="btn btn-dark site_btn_lg login_modal">Booking</a>
									@endif
								</li>
								<li class="list-inline-item">
									<div class="site_venue_space_detail_price">${{ $property->price }}<span>/hr</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="mb-4">
						<form>
							<div class="row">
								<div class="col-lg-3 mb-4">
									<label>Date</label>
									<input type="date" class="form-control rounded-0 date_time">
								</div>
								<div class="col-lg-3 mb-4">
									<label>Start</label>
									<input type="time" class="form-control rounded-0 start time">
								</div>
								<div class="col-lg-3 mb-4">
									<label>End</label>
									<input type="time" class="form-control rounded-0 end time">
								</div>
								<div class="col-lg-3 mb-4">
									<div class="mt-5"><a href="#">Extended a day</a></div>
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
							<div class="site_vsd_price_calc">${{ $property->price }} x <span class="hours"></span></div>
						</div>
						<div class="col">
							<div class="site_vsd_price_amount"></div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col">
							<div class="site_vsd_price_processing">Processing <i class="fas fa-question-circle"></i></div>
						</div>
						<div class="col">
							<div class="site_vsd_price_total"></div>
						</div>
						<div class="col-lg-12"><hr class="mb-4 bg-dark"></div>			  
						<div class="col">
							<div class="site_vsd_price_total_title">Total</div>
						</div>
						<div class="col">
							<div class="site_vsd_price_total_amount"></div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="site_vsd_cancel_title py-2">Cancel for free within 24 hours</div>
						</div>
						<div class="col">
							<div class="site_vsd_request_book">
								<a href="/properties/{{$property->id}}/booking" class="btn btn-outline-primary">Request to Book</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<hr class="my-4">
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-lg-12"><a href="#" class="btn btn-dark site_btn_lg">Meet Your Host</a></div>
					</div>
					<div class="row"> 
						<div class="col-lg-3">
							<div class="site_vsd_host_thumb"><img src="../vendor/images/circle-img.png" class="img-fluid" alt=""></div>
						</div>
						<div class="col-lg-4">
							<div class="site_vsd_host_detail py-4">
								<div class="site_vsd_host_agent_name mb-3">{{ $owner->first_name }}</div>
								<div class="site_vsd_host_agent_description">{{ $owner ->description }}</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="site_vsd_host_detail py-4">
								<div class="site_vsd_host_agent_response mb-1">Response rate : {{ $owner->response_rate }}%.</div>
								<div class="site_vsd_host_agent_response_time mb-2">Response time : {{ $owner->response_time }}</div>
								<a href="../vendor/inbox.html" class="btn btn-outline-primary">Meet Your Host</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<hr class="my-4">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 mb-4">
							<a href="#" class="btn btn-dark site_btn_lg">
								Location
							</a>

							<div class="form-group">
							    <label for="address_address">Address</label>
							    <input type="hidden" id="address-input" name="address" class="form-control map-input">
							    <input type="hidden" name="latitude" id="address-latitude" value="{{ $address->latitude }}" />
							    <input type="hidden" name="longitude" id="address-longitude" value="{{ $address->longitude }}" />
							</div>
							<div id="address-map-container" style="width:100%;height:400px; ">
							    <div style="width: 100%; height: 100%" id="address-map"></div>
							</div>
						</div>
						<div class="col-lg-12">
							<img src="../vendor/images/map-img.png" class="img-fluid w-100" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<hr class="my-4">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 mb-4">
							<a href="/properties/{{$property->id}}/reviews" class="btn btn-dark site_btn_lg">
								Reviews
							</a>
						</div>
						@foreach($reviews as $review)
						<div class="col-lg-6 mb-4">
							<div class="site_review_media media">
								<img src="{{ isset($user) ? asset('/images/'.$user->avatar) : "" }}" class="mr-3" alt="...">
								<div class="media-body">
									<h6 class="mt-0">{{ $review->user->first_name }}</h6>
									<p>Job</p>
									<div class="site_venue_rating mb-1">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star site_light_color"></i>
										<span class="site_venue_rewiews"><i class="fas fa-check"></i> Yes, I would book</span>
									</div>
			      					<p>{{ $review->text }}</p>
									<small class="site_vsd_review_time">{{ $review->created_at }}</small>
								</div>
							</div>
						</div>
						@endforeach
						<div class="col-lg-12">
							<div class="site_vsd_more_link">
								<small><a href="/properties/{{$property->id}}/reviews">See more</a></small>
							</div>
						</div>
					</div>				  				  				  
					<div class="row">
						<div class="col-lg-12">
							<hr class="my-4">
						</div>
					</div>		
					<div class="row">
						<div class="col-lg-12 mb-4">
							<a href="#" class="btn btn-dark site_btn_lg">
								Rules
							</a>
						</div>
						<div class="col-lg-12 mb-4">
							<div class="site_rules_content">
								<p>
									Lorem ipsum dolor sit amet, consetetur sadipscing elitr Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consetetur Lorem ipsum dolor
								</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="site_vsd_more_link">
								<small><a href="#">See more</a></small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<hr class="my-4">
						</div>
					</div>		
					<div class="row">
						<div class="col-lg-12 mb-4">
							<a href="#" class="btn btn-dark site_btn_lg">
								Operating Hours
							</a>
						</div>
						<div class="col-lg-12 mb-4">
							<div class="site_rules_content">
								<ul class="list-inline">
									<li class="list-inline-item">Monday - Sunday</li>
									<li class="list-inline-item">All day (24 hours)</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="site_vsd_more_link">
								<small><a href="#">See more</a></small>
							</div>
						</div>
					</div>				  
					<div class="row">
						<div class="col-lg-12">
							<hr class="my-4">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 mb-4">
							<a href="#" class="btn btn-dark site_btn_lg">
								Cancellation Policy
							</a>
						</div>
						<div class="col-lg-12 mb-4">
							<div class="site_rules_content">
								<div class="site_vsd_policy">
									<p class="site_vsd_policy_title mb-0">Grace Period</p>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
									invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
									<p class="site_vsd_policy_title mb-0">Grace Period</p>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
									invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
								</div>
							</div>
						</div>	
						<div class="col-lg-12">
							<div class="site_vsd_more_link">
								<small><a href="#">See more</a></small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
<script type="text/javascript">

		function initialize() {

		$('form').on('keyup keypress', function(e) {
			var keyCode = e.keyCode || e.which;
			if (keyCode === 13) {
				e.preventDefault();
				return false;
			}
		});
		const locationInputs = document.getElementsByClassName("map-input");

		const autocompletes = [];
		const geocoder = new google.maps.Geocoder;
		for (let i = 0; i < locationInputs.length; i++) {

			const input = locationInputs[i];
			const fieldKey = input.id.replace("-input", "");
			const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';

			const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -33.8688;
			const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 151.2195;

			const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
				center: {lat: latitude, lng: longitude},
				zoom: 13
			});
			const marker = new google.maps.Marker({
				map: map,
				position: {lat: latitude, lng: longitude},
			});

			marker.setVisible(isEdit);

			const autocomplete = new google.maps.places.Autocomplete(input);
			autocomplete.key = fieldKey;
			autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
		}

		for (let i = 0; i < autocompletes.length; i++) {
			const input = autocompletes[i].input;
			const autocomplete = autocompletes[i].autocomplete;
			const map = autocompletes[i].map;
			const marker = autocompletes[i].marker;

			google.maps.event.addListener(autocomplete, 'place_changed', function () {
				marker.setVisible(false);
				const place = autocomplete.getPlace();

				geocoder.geocode({'placeId': place.place_id}, function (results, status) {
					if (status === google.maps.GeocoderStatus.OK) {
						const lat = results[0].geometry.location.lat();
						const lng = results[0].geometry.location.lng();
						setLocationCoordinates(autocomplete.key, lat, lng);
					}
				});

				if (!place.geometry) {
					window.alert("No details available for input: '" + place.name + "'");
					input.value = "";
					return;
				}

				if (place.geometry.viewport) {
					map.fitBounds(place.geometry.viewport);
				} else {
					map.setCenter(place.geometry.location);
					map.setZoom(17);
				}
				marker.setPosition(place.geometry.location);
				marker.setVisible(true);

			});
		}
	}

	function setLocationCoordinates(key, lat, lng) {
		const latitudeField = document.getElementById(key + "-" + "latitude");
		const longitudeField = document.getElementById(key + "-" + "longitude");
		latitudeField.value = lat;
		longitudeField.value = lng;
	}
	$(document).ready(function() {
		$('[data-id]').click(function(e) {
			e.preventDefault();

			var self = $(this);
			var id = self.data('id');
			var url = '/favorite/properties/'+id;

			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('.csrf-token').val()
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

		$("input.time").focusout(function(){

			var start_time = $('.start').val();
			var end_time = $('.end').val();
			var date = $('.date_time').val();
			var price = {{ $property->price }};
			var start_date = new Date(date + ' ' + start_time);
			var end_date = new Date(date + ' ' + end_time);
	    	var diff_date = ( end_date - start_date ) / 1000 / 60 / 60 ;
	    	var diff_date_span = diff_date + ' ' +'hours';
	    	$('.hours').text(diff_date_span);

	    	var big_price = price * diff_date;
	    	var processing_price = 45;
	    	var price_total_amount = processing_price+big_price;

	    	$('.site_vsd_price_amount').text('$'+big_price);
	    	$('.site_vsd_price_total').text('$'+ processing_price);
	    	$('.site_vsd_price_total_amount').text('$'+price_total_amount);
		});
	})
</script>
@endsection