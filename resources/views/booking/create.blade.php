@extends('layouts.master')

@section('content')
<section class="site_section_wrapper py-0">
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			<div class="site_sticky_col_booking col-lg-6 py-5">
				<div class="row site_booking_details">
					<div class="col-lg-10 mx-auto">
						<h1 class="site_booking_detail_title">Details</h1>
						<h5 class="site_booking_detail_subtitle mb-0">{{ $property->name }}</h5>
					</div>
					<div class="col-lg-12 my-3">
						<div class="site_booking_thumbnail">
							@foreach($propertyImage as $image)
							<img src="{{ Storage::url('/images/'.$image->url) }}" class="img-fluid w-100" alt="">
							@endforeach
						</div>
					</div>
					<div class="col-lg-10 mx-auto">
						<h4 class="site_booking_detail_date_title">Date & Time</h4>
						<p class="site_booking_detail_date mb-2">Wed, Apr 10, 2019</p>
						<p class="site_booking_detail_date_time">8 : 00 AM - 1 : 00 PM</p>
					</div>
				</div>
				<div class="row mb-1">
					<div class="col-lg-10 mx-auto">
						<div class="site_vsd_price_title">Price</div>
					</div>
				</div>
				<div class="row mb-1">
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col">
								<div class="site_vsd_price_calc">${{ $property->price }} x <span class="hours"></span></div>
							</div>
							<div class="col">
								<div class="site_vsd_price_amount"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-4">
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col">
								<div class="site_vsd_price_processing">Processing <i class="fas fa-question-circle"></i></div>
							</div>
							<div class="col">
								<div class="site_vsd_price_total"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col-lg-12"><hr class="mb-4 bg-dark"></div>
							<div class="col">
								<div class="site_vsd_price_total_title">Total</div>
							</div>
							<div class="col">
								<div class="site_vsd_price_total_amount"></div>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-lg-6">
				<div class="site_venue_space_detail_content bg-light">
					<h1 class="site_venue_space_detail_title mb-4">Request to Book</h1>
					<div class="mb-4">
						<form class="form-edit-add" method="POST" action="{{ route('booking.store',$property->id) }}">
			            	@csrf
							<h4 class="site_booking_activit_title mb-4">1. When is your activity?</h4>
							<div class="row">
								<div class="col-lg-3">
									<label>Date</label>
									<input type="date" class="form-control rounded-0 date_time" name="date">
									<input type="hidden" class="form-control rounded-0" id="site_vsd_price_total_amount" name="total_price" value="">
								</div>
								<div class="col-lg-3">
									<label>Start</label>
									<input type="time" class="form-control rounded-0 start time" name="from_date">
								</div>
								<div class="col-lg-3">
									<label>End</label> 
									<input type="time" class="form-control rounded-0 end time" name="to_date">
									<input type="hidden" class="form-control rounded-0" name="property_id" value="{{ $property->id }}">
								</div>
								<div class="col-lg-3">
									<div class="mt-5"><a href="#">Extended a day</a></div>
								</div>
							</div>
							<div class="col-lg-12 mt-4">
								<button  style="float: right;" class="btn btn-outline-primary">To book</button>
							</div>
						</form>
					</div>
					<div class="row mb-2">
						<div class="col-lg-12"><hr class="mb-4 bg-light"></div>
					</div>
					<div class="row mb-5">
						<div class="col-lg-12"><h4 class="site_booking_activit_title mb-4">2. What are you planning?</h4></div>
						<div class="col-lg-5">
							<select class="form-control border-0 rounded-0 border-light" name="" id="">
								@foreach($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row"> 
						<div class="col-lg-12 mb-3"><div class="site_booking_host_message_title">Message your host, Shehroz</div></div>
						<div class="col-lg-3">
							<div class="site_vsd_host_thumb"><img src="../vendor/images/circle-img.png" class="img-fluid" alt=""></div>
						</div>
						<div class="col-lg-9">
							<div class="site_booking_host_message_list py-3">
								<ul class="pl-3">
									<li>Introduce yourself</li>
									<li>Describe yourself</li>
									<li>Describe how you plan to use the space</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-12 mb-4">
							<textarea class="form-control border-0 border-light" rows="5" placeholder="Please enter a message."></textarea>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-lg-6">
							<label>How many people will attend?</label>
							<input type="text" class="form-control border-0 rounded-0 border-light" placeholder="Max capacity is {{$property->capacity}}">
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-lg-12"><p>Will alcohol be consumed in this activity?</p></div>
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-6">
									<a href="#" class="btn btn-white btn-block rounded-0"> Yes</a>
								</div>
								<div class="col-lg-6">
									<a href="#" class="btn btn-white btn-block rounded-0"> No</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>				  
					<div class="row mb-4">
						<div class="col-lg-12"><h4 class="site_booking_activit_title mb-4">3. How would you like to pay?</h4></div>
						<div class="col-lg-6">
							<select class="form-control border-0 border-light">
								<option>Add Card</option>
								<option>Option 1</option>
								<option>Option 2</option>
							</select>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-lg-6">
							<input type="tetxt" class="form-control border-0 border-light" placeholder="Cardholder's Name">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text bg-white border-white" id="basic-addon1"><i class="fas fa-credit-card"></i></span>
								</div>
								<input type="text" class="form-control border-white rounded-0" placeholder="Card number">
							</div>
						</div>
					</div>
					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>				  				  
					<div class="row"> 
						<div class="col-lg-12"><h4 class="site_booking_activit_title mb-4">What's next?</h4></div>
						<div class="col-lg-10">
							<div class="site_booking_what_next_content">
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
								<p>Cancellation Policy</p>
								<ul class="pl-3 mb-0">
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</li>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing</li>
								</ul>
							</div>
						</div>
					</div>				  				  
					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>
					<div class="row">
						<div class="col-lg-12 mb-4"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p></div>
						<div class="col-lg-12 mb-4">
							<a href="booking-successful.html" class="btn btn-outline-primary rounded-0 btn-block">Send Booking Request</a>
						</div>
						<div class="col-lg-12">
							<p>By clicking Send Booking Request, you agree to Common Venue's Services Agreement,
							which includes the Community Guidelines, and Cancellation and Refund Policy.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function() {
		$("input.time").focusout(function(){

			var start_time = $('.start').val();
			var end_time = $('.end').val();
			var date = $('.date_time').val();
			var price = {{ $property->price }};
			var start_date = new Date(date + ' ' + start_time);
			var end_date = new Date(date + ' ' + end_time);
	    	var diff_date = ( end_date - start_date ) / 1000 / 60 / 60 ;
	    	var diff_date_span = diff_date + ' ' +'hours';
	    	$('.hours').text(diff_date);

	    	var big_price = price * diff_date;
	    	var processing_price = 45;
	    	var price_total_amount = processing_price+big_price;

	    	$('.site_vsd_price_amount').text('$'+big_price);
	    	$('.site_vsd_price_total').text('$'+ processing_price);
	    	$('.site_vsd_price_total_amount').text('$'+price_total_amount);
	    	$('#site_vsd_price_total_amount').val(price_total_amount);
		});
	})
</script>
@endsection