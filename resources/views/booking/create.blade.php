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
							@foreach($property->working_hours as $working_hours)
							<p class="site_booking_detail_date mb-2">{{ $working_hours->day }}</p>
							<p class="site_booking_detail_date_time">{{ $working_hours->from_time }} - {{ $working_hours->to_time }}</p>
							@endforeach
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
									<div class="site_vsd_price_calc">
										${{ $property->price }} x <span class="hours"></span>
									</div>
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
									<div class="site_vsd_price_processing">Processing
										<i class="fas fa-question-circle"></i>
									</div>
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
						<form class="form-edit-add" method="POST" action="/properties/{{$property->id}}/booking">
						@csrf
							<input type="hidden" name="user_id" value="{{auth()->id()}}">
							<div class="mb-4">
								<h4 class="site_booking_activit_title mb-4">1. When is your activity?</h4>
								<div class="row">
									<div class="col-lg-3">
										<label>Date</label>
										<input type="date" class="form-control rounded-0 date_time" name="date" required="">
										<input type="hidden" class="form-control rounded-0" id="site_vsd_price_total_amount" name="total_price" value="" required="">
									</div>
									<div class="col-lg-3">
										<label>Start</label>
										<input type="time" class="form-control rounded-0 start time" name="from_date" required="">
									</div>
									<div class="col-lg-3">
										<label>End</label> 
										<input type="time" class="form-control rounded-0 end time" name="to_date" required="">
										<input type="hidden" class="form-control rounded-0" name="property_id" value="{{ $property->id }}" required="">
									</div>
									<div class="col-lg-3">
										<div class="mt-5">
											<a href="#">Extended a day</a>
										</div>
									</div>
								</div>
								<div class="col-lg-12 mt-4">
									<button  style="float: right;" class="btn btn-outline-primary">To book</button>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-lg-12">
									<hr class="mb-4 bg-light">
								</div>
							</div>
							<div class="row mb-5">
								<div class="col-lg-12">
									<h4 class="site_booking_activit_title mb-4">2. What are you planning?</h4>
								</div>
								<div class="col-lg-5">
									<select class="form-control border-0 rounded-0 border-light" name="category_id" id="">
										@if(is_array($property->category))
											@foreach($property->category as $category)
												<option value="{{ $category->id }}" name="category_id">{{ $category->name }}</option>
											@endforeach
										@else
											<option value="{{ $property->category->id }}" >{{ $property->category->name }}</option>
										@endif
									</select>
								</div>
							</div>
							<div class="row"> 
								<div class="col-lg-12 mb-3">
									<div class="site_booking_host_message_title">Message your host, {{ $contactPerson->first_name }}</div>
								</div>
								<div class="col-lg-3">
									<div class="site_vsd_host_thumb">
										<img src="{{ Storage::url('images/'.$contactPerson->image) }}" class="img-fluid" alt="">
									</div>
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
									<textarea class="form-control border-0 border-light" name="message" rows="5" placeholder="Please enter a message."></textarea>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-6">
									<label>How many people will attend?</label>
									<input type="number" class="form-control border-0 rounded-0 border-light" name="capacity" placeholder="Max capacity is {{ $property->capacity }}" required="">
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12">
									<p>Will alcohol be consumed in this activity?</p>
								</div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-6">
											<button class="btn btn-white btn-block rounded-0 adult">Yes</button>
										</div>
										<input class="adult_input" type="hidden" name="adult" required="">
										<div class="col-lg-6">
											<button class="btn btn-white btn-block rounded-0 not_adult">No</button>
										</div>
										<div class="col-lg-12">
											<p class="adult_message">Yes alcohol will be consumed in this activity</p>
											<p  class="not_adult_message">No alcohol would not be consumed in this activity</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<hr class="my-4">
								</div>
							</div>				  
							<div class="row mb-4">
								<div class="col-lg-12">
									<h4 class="site_booking_activit_title mb-4">3. How would you like to pay?</h4>
								</div>
								<div class="col-lg-6">
									<!-- <select class="form-control border-0 border-light">
										<option>Add Card</option>
											{{-- <option>{{ $creditCard->card_brand }}</option> --}}
											<option>Option 2</option>
									</select> -->
								</div>
							</div>
						<div class="row mb-4">
							<div class="col-lg-6">
			                    <script 
			                        src = " https://checkout.stripe.com/checkout.js " class = "stripe-button" 
			                        data-key = "{{config ('services.stripe.key')}}" 
			                        data-name =" Booking " 
			                        id="pay" 
			                        data-amount = ""
			                        data-description =" Proof of booking  " 
			                        data-image =" https://stripe.com/img/documentation/checkout/marketplace.png " 
			                        data-locale =" auto ">
			                    </script>
			                {{-- </form> --}}
							</div>
						</div>
						</form>

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
								<button type="submit" class="btn btn-outline-primary rounded-0 btn-block" id="card-button">Send Booking Request</button>
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
<script src="https://js.stripe.com/v3/"></script>

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
			var processing_price = {{ $property->cleaning_fee }};
			var price_total_amount = processing_price+big_price;

			$('.site_vsd_price_amount').text('$'+big_price);
			$('.site_vsd_price_total').text('$'+ processing_price);
			$('.site_vsd_price_total_amount').text('$'+price_total_amount);
			$('#site_vsd_price_total_amount').val(Math.trunc(price_total_amount));
			$('#pay').attr("data-amount") = Math.trunc(price_total_amount);
		});

		/*
		* Will alcohol be consumed in this activity?
		*/
		$('.adult_message').hide();
		$('.not_adult_message').hide();
		let adult;

		$('.adult').click(function(e) {
			e.preventDefault();
			adult = $('input[name=adult]').val(1);
			$('.not_adult').hide();
			$('.adult').hide();
			$('.adult_message').show();
		});

		$('.not_adult').click(function(e) {
			e.preventDefault();
			adult = $('input[name=adult]').val(0);
			$('.adult').hide();
			$('.not_adult').hide();
			$('.not_adult_message').show();
		});

	})
</script>
@endsection