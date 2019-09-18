@extends('layouts.master')

@section('content')
<section class="site_section_wrapper py-0">
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			@foreach($bookings as $booking)
			<div class="site_sticky_col col-lg-6">
				<div class="site_venue_space_carousel owl-carousel owl-theme">
					<div class="item">
						@foreach($booking->property->images as $image)
							<img src="{{ Storage::url('/images/'.$image->url) }}" class="img-fluid w-100" alt="">
						@endforeach
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
			@endforeach
		</div>
	</div>
</section>
@endsection