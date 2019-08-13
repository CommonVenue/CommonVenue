@extends('layouts.master')

@section('content')
<!-- Section 1 start -->

<section class="site_section_wrapper py-0">
	
	<div class="container-fluid px-0">
		
		<div class="row no-gutters">
			
			<div class="site_sticky_col col-lg-6">

				<div class="site_venue_space_carousel owl-carousel owl-theme">
					<div class="item"><img src="../vendor/images/benjamin-child-90768-unsplash.png" class="img-fluid w-100" alt=""></div>
					<div class="item"><img src="../vendor/images/benjamin-child-90768-unsplash.png" class="img-fluid w-100" alt=""></div>
					<div class="item"><img src="../vendor/images/benjamin-child-90768-unsplash.png" class="img-fluid w-100" alt=""></div>
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
									
									<span>+Save</span> <i class="far fa-heart"></i>
									
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
						
						<div class="col-lg-3 mb-4"><div class="site_venue_space_detail_services_box"><i class="fas fa-wifi"></i> Wifi</div></div>
						<div class="col-lg-3 mb-4"><div class="site_venue_space_detail_services_box"><i class="fas fa-coffee"></i> Coffee</div></div>
						<div class="col-lg-3 mb-4"><div class="site_venue_space_detail_services_box"><i class="fas fa-table"></i> Table</div></div>
						<div class="col-lg-3 mb-4"><div class="site_venue_space_detail_services_box"><i class="fas fa-chair"></i> Chairs</div></div>
						<div class="col-lg-3 mb-4"><div class="site_venue_space_detail_services_box"><i class="fas fa-tv"></i> Screen</div></div>
						<div class="col-lg-3 mb-4"><div class="site_venue_space_detail_services_box"><i class="fas fa-chalkboard"></i> Whiteboard</div></div>
						<div class="col-lg-3 mb-4"><div class="site_venue_space_detail_services_box"><i class="fas fa-toilet-paper"></i> Restroom</div></div>
						<div class="col-lg-3 mb-4"><div class="site_venue_space_detail_services_box"><i class="fas fa-phone"></i> Conference Phone</div></div>

						
					</div>
					
					<div class="row"><div class="col-lg-12"><a data-toggle="collapse" href="#collapseExample" id="site_showall" class="site_venue_space_detail_services_showall">Show All</a></div></div>
					
					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>
					
					<div class="row mb-4">
						<div class="col-lg-12">
							<ul class="list-inline mb-0">
								<li class="list-inline-item"><a href="#" class="btn btn-dark site_btn_lg">Booking</a></li>
								<li class="list-inline-item"><div class="site_venue_space_detail_price">${{ $property->price }}<span>/hr</span></div></li>
							</ul>	  
						</div>
					</div>
					
					
					<div class="mb-4">
						<form>
							<div class="row">
								
								<div class="col-lg-3 mb-4">
									<label>Date</label>
									<input type="date" class="form-control rounded-0">  
								</div>
								<div class="col-lg-3 mb-4">
									<label>Start</label>
									<input type="time" class="form-control rounded-0">  
								</div>
								<div class="col-lg-3 mb-4">
									<label>End</label> 
									<input type="time" class="form-control rounded-0">  
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
							<div class="site_vsd_price_calc">$50.00 x 5 hours</div>
						</div>
						<div class="col">
							<div class="site_vsd_price_amount">$250.00</div>
						</div>
					</div>

					<div class="row mb-4">
						<div class="col">
							<div class="site_vsd_price_processing">Processing <i class="fas fa-question-circle"></i></div>
						</div>
						<div class="col">
							<div class="site_vsd_price_total">$45.00</div>
						</div>
						<div class="col-lg-12"><hr class="mb-4 bg-dark"></div>					  
						<div class="col">
							<div class="site_vsd_price_total_title">Total</div>
						</div>
						<div class="col">
							<div class="site_vsd_price_total_amount">$295.00</div>
						</div>
						
					</div>
					<div class="row">
						
						<div class="col"><div class="site_vsd_cancel_title py-2">Cancel for free within 24 hours</div></div>
						<div class="col"><div class="site_vsd_request_book"><a href="booking.html" class="btn btn-outline-primary">Request to Book</a></div></div>
						
					</div>
					
					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>				  
					
					
					<div class="row mb-4"> 
						<div class="col-lg-12"><a href="#" class="btn btn-dark site_btn_lg">Meet Your Host</a></div>
					</div>				  

					<div class="row"> 
						<div class="col-lg-3">
							<div class="site_vsd_host_thumb"><img src="../vendor/images/circle-img.png" class="img-fluid" alt=""></div>
						</div>
						<div class="col-lg-4">
							<div class="site_vsd_host_detail py-4">
								<div class="site_vsd_host_agent_name mb-3">Shehroz H.</div>
								<div class="site_vsd_host_agent_description">Lorem ipsum dolor sit amet, consetetur sadipscing</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="site_vsd_host_detail py-4">
								<div class="site_vsd_host_agent_response mb-1">Response rate : 100%.</div>
								<div class="site_vsd_host_agent_response_time mb-2">Response time : within an hour</div>
								<a href="../vendor/inbox.html" class="btn btn-outline-primary">Meet Your Host</a>
							</div>
						</div>
						
					</div>				  
					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>				  				  
					
					<div class="row"> 
						<div class="col-lg-12 mb-4"><a href="#" class="btn btn-dark site_btn_lg">Location</a></div>
						
						<div class="col-lg-12">
							
							<img src="../vendor/images/map-img.png" class="img-fluid w-100" alt="">
							
						</div>
						
					</div>				  

					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>				  				  				  

					
					<div class="row"> 
						<div class="col-lg-12 mb-4"><a href="#" class="btn btn-dark site_btn_lg">Reviews</a></div>
						<div class="col-lg-6 mb-4">
							<div class="site_review_media media">
								<img src="../vendor/images/circle-img.png" class="mr-3" alt="...">
								<div class="media-body">
									<h6 class="mt-0">John Doe</h6>
									<p>Job</p>  
									<div class="site_venue_rating mb-1">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star site_light_color"></i>
										<span class="site_venue_rewiews"><i class="fas fa-check"></i> Yes, I would book</span>
									</div>								  
									<p>Lorem ipsum dolor sit amet, consetetur </p>  
									<small class="site_vsd_review_time">2 days ago</small>  
								</div>
							</div>						  
						</div>

						<div class="col-lg-6 mb-4">
							<div class="site_review_media media">
								<img src="../vendor/images/circle-img.png" class="mr-3" alt="...">
								<div class="media-body">
									<h6 class="mt-0">John Doe</h6>
									<p>Job</p>  
									<div class="site_venue_rating mb-1">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star site_light_color"></i>
										<span class="site_venue_rewiews"><i class="fas fa-check"></i> Yes, I would book</span>
									</div>								  
									<p>Lorem ipsum dolor sit amet, consetetur </p>  
									<small class="site_vsd_review_time">2 days ago</small>  
								</div>
							</div>						  
						</div>

						<div class="col-lg-6 mb-4">
							<div class="site_review_media media">
								<img src="../vendor/images/circle-img.png" class="mr-3" alt="...">
								<div class="media-body">
									<h6 class="mt-0">John Doe</h6>
									<p>Job</p>  
									<div class="site_venue_rating mb-1">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star site_light_color"></i>
										<span class="site_venue_rewiews"><i class="fas fa-check"></i> Yes, I would book</span>
									</div>								  
									<p>Lorem ipsum dolor sit amet, consetetur </p>  
									<small class="site_vsd_review_time">2 days ago</small>  
								</div>
							</div>						  
						</div>

						
						<div class="col-lg-6 mb-4">
							<div class="site_review_media media">
								<img src="../vendor/images/circle-img.png" class="mr-3" alt="...">
								<div class="media-body">
									<h6 class="mt-0">John Doe</h6>
									<p>Job</p>  
									<div class="site_venue_rating mb-1">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star site_light_color"></i>
										<span class="site_venue_rewiews"><i class="fas fa-check"></i> Yes, I would book</span>
									</div>								  
									<p>Lorem ipsum dolor sit amet, consetetur </p>  
									<small class="site_vsd_review_time">2 days ago</small>  
								</div>
							</div>						  
						</div>
						
						<div class="col-lg-12"><div class="site_vsd_more_link"><small><a href="#">See more</a></small></div></div>
						
					</div>				  				  				  
					
					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>		
					
					<div class="row">
						<div class="col-lg-12 mb-4"><a href="#" class="btn btn-dark site_btn_lg">Rules</a></div>
						<div class="col-lg-12 mb-4"><div class="site_rules_content"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consetetur Lorem ipsum dolor</p></div></div>	
						<div class="col-lg-12"><div class="site_vsd_more_link"><small><a href="#">See more</a></small></div></div>						
						
					</div>
					

					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>		
					
					<div class="row">
						<div class="col-lg-12 mb-4"><a href="#" class="btn btn-dark site_btn_lg">Operating Hours</a></div>
						<div class="col-lg-12 mb-4"><div class="site_rules_content">
							
							<ul class="list-inline">
								<li class="list-inline-item">Monday - Sunday</li>
								<li class="list-inline-item">All day (24 hours)</li>
							</ul>
							
						</div></div>	
						<div class="col-lg-12"><div class="site_vsd_more_link"><small><a href="#">See more</a></small></div></div>						
						
					</div>				  

					<div class="row"> <div class="col-lg-12"><hr class="my-4"></div></div>		
					
					<div class="row">
						<div class="col-lg-12 mb-4"><a href="#" class="btn btn-dark site_btn_lg">Cancellation Policy</a></div>
						<div class="col-lg-12 mb-4"><div class="site_rules_content">
							
							<div class="site_vsd_policy">
								<p class="site_vsd_policy_title mb-0">Grace Period</p>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
								invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
								<p class="site_vsd_policy_title mb-0">Grace Period</p>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
								invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
								
							</div>
							
							
						</div></div>	
						<div class="col-lg-12"><div class="site_vsd_more_link"><small><a href="#">See more</a></small></div></div>						
						
					</div>				  
					
					
				</div>
				
				
				
				
			</div>
			
		</div>
		
	</div>
	
</section>

<!-- Section 1 end --> 


@endsection