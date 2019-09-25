
@extends('layouts.master')

@section('content')
<section class="site_section_wrapper">
	<!-- Payment Successful start -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="site_payment_successful_wrapper">
					<h2 class="site_payment_successful_tid">Transaction ID : 12412124</h2>
					<div class="site_check_circle_icon">
						<img src="/images/check-circle.png" class="img-fluid">
					</div>
					<h4 class="site_payment_successful_title">Payment Successful</h4>
					<p class="site_payment_successful_we_have">We have received your payment and you will soon be contacted by your host for further queries, if any.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Payment Successful end -->
	<div class="container-fluid px-0">
		<div class="row no-gutters bg-light py-5 mb-4">
			<div class="col-lg-12 text-center"><h1 class="site_booking_detail_title mb-4">Details</h1></div>
			<div class="col-lg-6">
				<div class="row site_booking_details">
					<div class="col-lg-12 my-3">
						<div class="swiper-container site_venue_space_swiper">
					      <div class="swiper-wrapper">
					        @foreach($propertyImage as $image)
					        <div class="swiper-slide">
					          <img src="{{ url('storage/images/'.$image->url) }}" class="img-fluid site_venue_space_swiper_img" alt="">
					        </div>
					        @endforeach
					      </div>
					      <!-- Add Arrows -->
					      <div class="swiper-button-next">
					        <span class="arrow next"></span>
					      </div>
					      <div class="swiper-button-prev">
					        <span class="arrow prev"></span>
					      </div>
					    </div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="site_venue_space_detail_content">
					<div class="row">
						<div class="col-lg-12">
							<h4 class="site_booking_detail_date_title">Date &amp; Time</h4>
							<p class="site_booking_detail_date mb-2">{{ $booking->date }}</p>
							<p class="site_booking_detail_date_time">{{ $booking->from_date }} - {{ $booking->to_date }}</p>
						</div>
					</div>
					<div class="row mb-1">
						<div class="col-lg-12">
							<div class="site_vsd_price_title">Price</div>
						</div>
					</div>
					<div class="row mb-1">
						<div class="col-lg-12">
							<div class="row">
								<div class="col">
									<div class="site_vsd_price_calc">${{ $property->price }} x {{($booking->total_price-$property->cleaning_fee)/($property->price) }} hours</div>
								</div>
								<div class="col">
									<div class="site_vsd_price_amount">${{($property->price)*(($booking->total_price-$property->cleaning_fee)/($property->price))}}</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-lg-12">
							<div class="row">
								<div class="col">
									<div class="site_vsd_price_processing">Processing <i class="fas fa-question-circle"></i></div>
								</div>
								<div class="col">
									<div class="site_vsd_price_total">${{ $property->cleaning_fee }}</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12"><hr class="mb-4 bg-light"></div>
								<div class="col">
									<div class="site_vsd_price_total_title">Total</div>
								</div>
								<div class="col">
									<div class="site_vsd_price_total_amount">${{ $booking->total_price }}</div>
								</div>
							</div>
						</div>
					</div>
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
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<p class="site_youcan_title">You can view your transaction history, receipts and apply for refund is any through bookings</p>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	var swiper = new Swiper('.site_venue_space_swiper', {
		navigation: {
			nextEl: '.site_venue_space_swiper .swiper-button-next',
			prevEl: '.site_venue_space_swiper .swiper-button-prev',
		},
	});
</script>
@endsection