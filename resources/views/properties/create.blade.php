@extends('layouts.master')

@section('content')
<!-- Section 1 start -->

<section class="site_section_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12"><h1 class="site_page_title">Create</h1></div>
		</div>
		<hr class="mt-2 mb-5">
		<form role="form" class="form-edit-add" method="POST" action="{{ route('addresses.store') }}">
			@csrf
			<div class="row mb-4">
				<div class="col-lg-12"><h4 class="site_select_category_title">Select Category</h4> </div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<ul class="site_select_catgory_list list-unstyled row">
						@foreach($categories as $category)
						<li class="col">
							<a href="#">
								<label for="category_{{$category->id}}">{{ $category->name }}
									<img src="/images/{{ $category->image}}" class="img-fluid" alt="">
								</label>
	  							<input type="radio" name="category_id" id="category_{{$category->id}}" value="{{ $category->id }}"><br>
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</form>
		
		<div class="row mb-5">
			<div class="col-lg-12">
				<div class="site_mylist_card site_mylist_edit_card card mb-4">
					<div class="card-body">
						<form method="POST" action="{{ route('properties.store') }}"enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Name</label>
										<input type="text" class="form-control"placeholder=" Lorium ipsum, Torronto" name="name">
									</div>
									<div class="form-group">
										<label>Price</label>
										<input type="text" class="form-control" placeholder=" Lorium ipsum, Torronto" name="price">
									</div>
										<input type="hidden" class="form-control" placeholder=" Lorium ipsum, Torronto" name="address_id" value="{{ isset($address->id) ? $address->id : "" }}">
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" rows="5" placeholder="Lorium ipsum, Torronto" name="description"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Add Images </label>
										<div class="site_input_file site_input_file_add btn btn-link pl-2">
											<i class="fas fa-plus-circle text-dark"></i>
											<input type="file" name="image">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<button class="btn btn-primary site_btn_lg save" style="float: right;">Save</button>
								</div>
							</div>
						</form>
					</div>
					<hr class="bg-dark my-0">
					<div class="card-body">
						<form role="form" class="form-edit-add" method="POST" action="{{ route('addresses.store') }}">
							@csrf
							<label>Address</label>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Country</label>
										<input type="text" class="form-control" name="country" value="{{ isset($address->country) ? $address->country : "" }}">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">City</label>
										<input type="text" class="form-control" name="city" value="{{ isset($address->city) ? $address->city : "" }}">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">State</label>
										<input type="text" class="form-control" name="state" value="{{ isset($address->state) ? $address->state : "" }}">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Unit</label>
										<input type="text" class="form-control" name="street_1" value="{{ isset($address->street_1) ? $address->street_1 : "" }}">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Zip/Postal Code</label>
										<input type="text" class="form-control" name="postal_code" value="{{ isset($address->postal_code) ? $address->postal_code : "" }}">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<button id="hiddenButton" type="submit" class="btn btn-primary site_btn_lg" style="float: right;">Save</button>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="address_address">Address</label>
								<input type="text" id="address-input" name="address" class="form-control map-input">
								<input type="hidden" name="latitude" id="address-latitude" value="0" />
								<input type="hidden" name="longitude" id="address-longitude" value="0" />
							</div>
							<div id="address-map-container" style="width:100%;height:400px; ">
								<div style="width: 100%; height: 100%" id="address-map"></div>
							</div>
						</form>
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
</script>
@endsection

