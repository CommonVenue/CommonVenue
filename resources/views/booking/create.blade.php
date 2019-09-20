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
						<form class="form-edit-add" method="POST" action="/properties/{{$property->id}}/booking" id="/properties/{{$property->id}}/booking">
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
										@foreach($propertyCategories as $category)
											<option value="{{ $category->id }}" name="category_id">{{ $category->name }}</option>
										@endforeach
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
									<select class="form-control border-0 border-light">
										<option>Add Card</option>
											<option>Option 2</option>
									</select>
								</div>
							</div>
						</form>

						<div class="row mb-4">
							<div class="col-lg-12">
			                    <form  id="payment-form">
									<div class="form">
										<label for="card-element">
										  Credit or debit card
										</label>
										<div id="card-element"></div>
										<div id="card-errors" role="alert"></div>
									</div>
									<button id="payment_button">Submit Payment</button>
								</form>
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
								<button form="/properties/{{$property->id}}/booking" type="submit" class="btn btn-outline-primary rounded-0 btn-block" id="card-button">Send Booking Request</button>
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
		$('#card-button').attr("disabled", true);
		var stripe = Stripe('pk_test_JMDrvC6Lqvpr14EJBDEF4G5R00VHfsHL8l');
		var elements = stripe.elements();
		var style = {
			base: {
				color: '#32325d',
				fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
				fontSmoothing: 'antialiased',
				fontSize: '16px',
				'::placeholder': {
					color: '#aab7c4'
				}
			},
			invalid: {
				color: '#fa755a',
				iconColor: '#fa755a'
			}
		};

		var card = elements.create('card', {style: style});
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		$(card).change(function(event) {
			var displayError = document.getElementById('card-errors');
			if (event.error) {
				displayError.textContent = event.error.message;
			} else {
				displayError.textContent = '';
			}
		})

		// Handle form submission.
		$('#payment-form').submit(function(e) {
			event.preventDefault();

			stripe.createToken(card).then(function(result) {
				if (result.error) {
					// Inform the user if there was an error.
					var errorElement = document.getElementById('card-errors');
					errorElement.textContent = result.error.message;
				} else {
					// Send the token to your server.
					stripeTokenHandler(result.token);
				}
			});
		});

		let paymentSuccess;
		// Submit the form with the token ID.
		function stripeTokenHandler(token) {
		  // Insert the token ID into the form so it gets submitted to the server
		  var form =$('#payment-form');
		  var hiddenInput = document.createElement('input');
		  hiddenInput.setAttribute('type', 'hidden');
		  hiddenInput.setAttribute('name', 'stripeToken');
		  hiddenInput.setAttribute('value', token.id);

		  let stripeId = token.card.id;
		  let expMonth = token.card.exp_month;
		  let expYear = token.card.exp_year;
		  let last4 = token.card.last4;
		  let userId = $('input[name=user_id]').val();

		  $.ajax({
		  	headers: {
		  		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  	},
		  	type: "POST",
		  	url: "/properties/{property}/booking/charge",
		  	dataType: "JSON",
		  	data:{
		  		stripe_id:stripeId,
		  		exp_month:expMonth,
		  		exp_year:expYear,
		  		last4:last4,
		  		user_id:userId,
		  	},
		  	success: function(res) {
		  		paymentSuccess = res
				$('#card-button').attr("disabled", false);
				setTimeout(function(){
					$('#payment_button').text('Success!'); 
				}, 500);
		  	},
		  	error: function(error) {
		  	}
		  });

		}

		function getUrlParameter(sParam) {
		    let sPageURL = window.location.search.substring(1),
		        sURLVariables = sPageURL.split('&'),
		        sParameterName,
		        i;

		    for (i = 0; i < sURLVariables.length; i++) {
		        sParameterName = sURLVariables[i].split('=');

		        if (sParameterName[0] === 'date') {
	        		let decodedUrl = decodeURIComponent(sParameterName[1]);
					let dateForDate = $('input[name=date]').val(decodedUrl);
		        }
		        if (sParameterName[0] === 'from_date') {
		        	let decodedUrl = decodeURIComponent(sParameterName[1]);
					let timeForFromDate = $('input[name=from_date]').val(decodedUrl);
		        }
		        if (sParameterName[0] === 'to_date') {
		        	let decodedUrl = decodeURIComponent(sParameterName[1]);
					let timeForToDate = $('input[name=to_date]').val(decodedUrl);
		        }
		    }
		};
		var tech = getUrlParameter('date');

		$("input.time").focusout(function(){
			let date = $('input[name="date"]').val();
			let start_time = $('input[name="from_date"]').val();
			let end_time = $('input[name="to_date"]').val();

			let price = {{ $property->price }};
			let start_date = new Date(date + ' ' + start_time);
			let end_date = new Date(date + ' ' + end_time);
			let diff_date = ( end_date - start_date ) / 1000 / 60 / 60 ;
			let diff_date_span = diff_date + ' ' +'hours';
			let big_price = price * diff_date;
			let processing_price = {{ $property->cleaning_fee }};
			let price_total_amount = processing_price+big_price;
			$('.hours').text(diff_date);
			$('.site_vsd_price_amount').text('$'+big_price);
			$('.site_vsd_price_total').text('$'+ processing_price);
			$('.site_vsd_price_total_amount').text('$'+price_total_amount);
			$('#site_vsd_price_total_amount').val(Math.trunc(price_total_amount));
			$('#pay').attr("data-amount") = Math.trunc(price_total_amount);
		});
		
		let date = $('input[name="date"]').val();
		let start_time = $('input[name="from_date"]').val();
		let end_time = $('input[name="to_date"]').val();

		let price = {{ $property->price }};
		let start_date = new Date(date + ' ' + start_time);
		let end_date = new Date(date + ' ' + end_time);
		let diff_date = ( end_date - start_date ) / 1000 / 60 / 60 ;
		let diff_date_span = diff_date + ' ' +'hours';
		let big_price = price * diff_date;
		let processing_price = {{ $property->cleaning_fee }};
		let price_total_amount = processing_price+big_price;

        if(date && start_time && end_time){
        	$('.hours').text(diff_date);
			$('.site_vsd_price_amount').text('$'+big_price);
			$('.site_vsd_price_total').text('$'+ processing_price);
			$('.site_vsd_price_total_amount').text('$'+price_total_amount);
			$('#site_vsd_price_total_amount').val(Math.trunc(price_total_amount));
			$('#pay').attr("data-amount") = Math.trunc(price_total_amount);
        }

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
<style scoped>
	/**
	 * The CSS shown here will not be introduced in the Quickstart guide, but shows
	 * how you can use CSS to style your Element's container.
	 */
	.StripeElement {
	    box-sizing: border-box;
	    height: 40px;
	    padding: 10px 12px;
	    border: 1px solid transparent;
	    border-radius: 4px;
	    background-color: white;
	    box-shadow: 0 1px 3px 0 #e6ebf1;
	    -webkit-transition: box-shadow 150ms ease;
	    transition: box-shadow 150ms ease;
	}
	.StripeElement--focus {
	  box-shadow: 0 1px 3px 0 #cfd7df;
	}

	.StripeElement--invalid {
	  border-color: #fa755a;
	}

	.StripeElement--webkit-autofill {
	  background-color: #fefde5 !important;
	}
	button {
	    border: none;
	    border-radius: 4px;
	    outline: none;
	    text-decoration: none;
	    color: #fff;
	    background: #32325d;
	    white-space: nowrap;
	    display: inline-block;
	    height: 40px;
	    line-height: 40px;
	    padding: 0 14px;
	    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
	    border-radius: 4px;
	    font-size: 15px;
	    font-weight: 600;
	    letter-spacing: 0.025em;
	    text-decoration: none;
	    -webkit-transition: all 150ms ease;
	    transition: all 150ms ease;
	    float: left;
	    margin-left: 12px;
	    margin-top: 28px;
	}
</style>
@endsection