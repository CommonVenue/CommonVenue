@extends('layouts.master')

@section('content')
<section class="site_section_wrapper py-0">
	<div class="container-fluid px-0">
		@if(count($bookings) == 0)
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>You have no bookings yet!</h1>
			</div>
		</div>
		@endif
		<div class="row no-gutters">
			@foreach($bookings as $booking)
			<div class="col-lg-6">
				<div class="swiper-container site_venue_space_swiper">
			      <div class="swiper-wrapper">
						@foreach($booking->property->images as $image)
			        <div class="swiper-slide">
			          <img src="{{ Storage::url('/images/'.$image->url) }}" class="img-fluid site_venue_space_swiper_img" alt="">
			        </div>
			        @endforeach
			      </div>
			      <div class="swiper-button-next">
			        <span class="arrow next"></span>
			      </div>
			      <div class="swiper-button-prev">
			        <span class="arrow prev"></span>
			      </div>
			    </div>
			</div>

			<div class="col-lg-6">
				<div class="site_venue_space_detail_content">
					<h1 class="site_venue_space_detail_title">{{ $booking->property->name }}</h1>
					<div class="mb-4">
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
			<div class="col-lg-12">
				<hr class="mb-4 bg-light">
			</div>
			@endforeach
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