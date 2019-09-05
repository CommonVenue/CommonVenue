@extends('layouts.master')

@section('content')
<section class="site_section_wrapper bg-light">
	<div class="container">
		<div class="row mb-4">
			<div class="site_step_form_column col-lg-12">
				<!-- Progress bar start -->    
				<div class="site_step_count"></div>  
				<div class="site_progress_bar my-2 progress rounded-0">
					<div class="progress-bar bg-success active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<div class="site_percentage mb-5"></div>  
				<!-- Progress bar end -->   

				<!-- Success msg start -->   		  
				<div class="alert alert-success d-none"></div>
				<!-- Success msg end -->   		  		  

				<!-- Form start -->  
				<form id="user_form" novalidate action=""  method="post">
				@csrf
					<!-- Step 1 start -->
					<fieldset class="d-none0">
						<div class="site_form_heading_wrapper">
							<h2 class="site_form_heading_title">Location</h2>
							<h5 class="site_form_heading_subtitle">The more you share, the faster you can get a booking.</h5>
						</div>
						<div class="row mb-4">
							<div class="col-lg-8" id="addresses">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Country</label>
											<input type="text" class="form-control" required id="country" name="country">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="address_address">Map</label>
											{{-- <input type="text" id="address-input" name="address" class="form-control map-input">
											<input type="hidden" name="latitude" id="address-latitude"/>
											<input type="hidden" name="longitude" id="address-longitude"/> --}}
											<div style="width: 318px; height: 148px;">
												{!! Mapper::render() !!}
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>City</label>
											<input type="text" class="form-control" required id="city" name="city">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>State</label>
											<input type="text" class="form-control" required id="state" name="state">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Unit</label>
											<input type="text" class="form-control" required id="unit" name="unit">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Zip/Postal Code</label>
											<input type="text" class="form-control" required id="postal_code" name="postal_code">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Address 1</label>
											<input type="text" class="form-control" required id="address_1" name="address_1">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Address 2</label>
											<input type="text" class="form-control" required id="address_2" name="address_2">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Next or back button start -->
						<button type="button" name="previous" class="previous btn btn-outline-primary site_ouline_step_btn">
							<i class="fas fa-arrow-left mr-2"></i> <span>Back</span>
						</button>
						<button type="button" class="next btn btn-primary site_primary_step_btn site_primary_step_btn_address">
							<span>Next</span> <i class="fas fa-arrow-right ml-2"></i>
						</button>
						<!-- Next or back button end -->
					</fieldset>
					<!-- Step 1 end -->
					<!-- Step 2 start -->
					<fieldset class="d-none0">
						<div class="site_form_heading_wrapper">
							<h2 class="site_form_heading_title">Give your space a title</h2>
							<h5 class="site_form_heading_subtitle">Lorem Ipsum is simply dummy text of the printing and typeseg industry
							Lorem Ipsum has been the industry's standard dummy text ever since t.</h5>
						</div>
						<div class="row mb-4">
							<div class="col-lg-12">
								<div class="row mb-5">
									<div class="col-lg-4">
										<ul class="site_give_list pl-3 mb-0 seprotext">
											<li>Location - urban, downtown, Marina</li>
											<li>Location - urban, downtown, Marina</li>
											<li>Location - urban, downtown, Marina</li>
										</ul>
									</div>
									<div class="col-lg-4">
										<div class="site_perk_field">
											<input type="text" class="form-control" required id="name" name="name" placeholder="Perk - great lighting, ">
										</div>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-lg-12 mb-4">
										<h4 class="site_add_desc_title">Add a description for your space</h4>
										<h6 class="site_add_desc_subtitle seprotext site_ls_2x mb-3">Include details about your space so that guests will know everything it offers.</h6>
										<ul class="site_give_list pl-3 mb-0">
											<li>What activities work well in your space?</li>
											<li>What is the layout of the space, and how can different areas be used?</li>
											<li>Is your space easy to get to? What's nearby?</li>
										</ul>
									</div>
									<div class="col-lg-6">
										<textarea class="form-control" rows="5" id="description" name="description"></textarea>
										<small class="text-danger">Required *</small>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-lg-12">
										<h4 class="site_add_desc_title">Who's allowed in your space?</h4>
										<h6 class="site_add_desc_subtitle seprotext site_ls_2x mb-3">Typically, only venues that serve alcohol have a 21+ requirement.</h6>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="adult" id="inlineRadio1" value="false">
											<label class="form-check-label" for="inlineRadio1">All ages</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="adult" id="inlineRadio2" value="true">
											<label class="form-check-label" for="inlineRadio2">21+</label>
										</div>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-lg-12">
										<h4 class="site_add_desc_title">What’s your wifi name and password?</h4>
										<h6 class="site_add_desc_subtitle seprotext site_ls_2x mb-3">Make it easier for your guests to get online by sharing your wifi name and password (e.g. Join "PeerspaceWifi" with the password "123456789")</h6>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" class="form-control" required="" id="wifi_name" name="wifi_name" placeholder="Wifi name">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input type="password" class="form-control" required="" id="wifi_password" name="wifi_password" placeholder="Wifi Password">
										</div>
									</div>
									<div class="col-lg-12"><p class="seprotext"><i class="fas fa-lock"></i> Don't worry, we'll only share this with guests after you have accepted their booking.</p></div>
								</div>
								<div class="row mb-4">
									<div class="col-lg-12 mb-4">
										<h4 class="site_add_desc_title">How do guests get access to your space?</h4>
										<h6 class="site_add_desc_subtitle seprotext site_ls_2x mb-3">Help your guests and their attendees understand the best way to locate your space. Be sure to mention details about:</h6>
										<ul class="site_give_list pl-3 mb-0">
											<li>Ipsum has been the industry's standard </li>
											<li>Arrival - public transportation options, available street parking or parking spaces, how many vehicles can fit </li>
										</ul>
									</div>
									<div class="col-lg-6">
										<textarea class="form-control" rows="5" id="location_description" name="location_description"></textarea>
									</div>
								</div>
							</div>
						</div>
						<!-- Next or back button start -->
						<button type="button" name="previous" class="previous btn btn-outline-primary site_ouline_step_btn">
							<i class="fas fa-arrow-left mr-2"></i> <span>Back</span>
						</button>
						<button type="button" class="next btn btn-primary site_primary_step_btn">
							<span>Next</span> <i class="fas fa-arrow-right ml-2"></i>
						</button>
						<!-- Next or back button end -->
					</fieldset>
					<!-- Step 2 end -->
					<!-- Step 3 start -->
					<fieldset class="d-none0">
						<div class="site_form_heading_wrapper">
							<h2 class="site_form_heading_title">Upload photos of your space</h2>
							<h5 class="site_form_heading_subtitle">Your photos are the first thing a guest will see.</h5>
						</div>
						<div class="row mb-4">
							<div class="col-lg-12">
								<div class="row mb-5">
									<div class="col-lg-4">
										<h4 class="site_photos_best_title seprotext">The best photos are:</h4>
										<ul class="site_photos_desc_list pl-3 mb-0 seprotext">
											<li>At least 1000 pixels wide</li>
											<li>Landscape, not portrait</li>
											<li>High quality, color, and well-lit</li>
											<li>Focused on the venue guests will book</li>
										</ul>
									</div>
									<div class="col-lg-4">
										<div class="site_photos_edit_link">
											<a href="#">Edit</a>
										</div>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-lg-8">
										<div class="site_photos_upload_box">
											<div class="site_photos_upload_icon"><i class="far fa-image"></i></div>
											<p class="text-muted">Please add at least 4 photos of your venue</p>
											<div class="site_input_file btn btn-lg btn-primary">
												Upload
												<input type="file" name="file"/>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Next or back button start -->
						<button type="button" name="previous" class="previous btn btn-outline-primary site_ouline_step_btn">
							<i class="fas fa-arrow-left mr-2"></i> <span>Back</span>
						</button>
						<button type="button" class="next btn btn-primary site_primary_step_btn">
							<span>Next</span> <i class="fas fa-arrow-right ml-2"></i>
						</button>
						<!-- Next or back button end -->
					</fieldset>
					<!-- Step 3 end -->
					<!-- Step 4 start -->
					<fieldset class="d-none0">
						<div class="site_form_heading_wrapper">
							<h2 class="site_form_heading_title">What are your operating hours?</h2>
							<h5 class="site_form_heading_subtitle">Operating hours are the days and hours of the week that your space is 
								open to host bookings (i.e. your general availability). Guests will not
							be able to book times outside of your operating hours. Learn More</h5>
						</div>
						<div class="row mb-4">
							<div class="site_hours_col_wrap col-lg-12">
								<div class="row site_hours_row_border">
									<div class="col-lg-8">
										<ul class="site_hours_list list-inline">
											<li class="list-inline-item site_switch_position">
												<div class="left-side">
													<label class="switch">
														<input type="checkbox" class="monday_checkbox">
														<span class="slider round"></span>
													</label>
												</div>
											</li>
											<li class="list-inline-item site_hours_position">
												<p class="site_hours_day_title mb-0 seprotext">Monday</p>
												<p class="site_hours_status_title mb-0 text-success opened_monday" style="display: none;">Open</p>
												<p class="site_hours_status_title mb-0 text-muted closed_monday">Closed</p>
											</li>
											<div class="monday" style="display: none;">
												<li class="list-inline-item">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="monday_radio" id="monday_radio1">
														<label class="form-check-label" for="monday_radio1">24 Hours</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="monday_radio" id="monday_radio2">
														<label class="form-check-label" for="monday_radio2">Set Hours</label>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="site_custom_hours_wrap">
														<input type="time" class="form-control monday_from_time" name="from_time"> 
														<div class="site_custom_hours_to">to</div>
														<input type="time" class="form-control monday_to_time"  name="to_time">

													</div>
												</li>
											</div>
										</ul>
									</div>
								</div>
								<div class="row site_hours_row_border">
									<div class="col-lg-8">
										<ul class="site_hours_list list-inline">
											<li class="list-inline-item site_switch_position">
												<div class="left-side">
													<label class="switch">
														<input type="checkbox" class="tuesday_checkbox">
														<span class="slider round"></span>
													</label>
												</div>
											</li>
											<li class="list-inline-item site_hours_position">
												<p class="site_hours_day_title mb-0 seprotext">Tuesday</p>
												<p class="site_hours_status_title mb-0 text-success opened_tuesday" style="display: none;">Open</p>
												<p class="site_hours_status_title mb-0 text-muted closed_tuesday">Closed</p>
											</li>
											<div class="tuesday" style="display: none;">
												<li class="list-inline-item">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="tuesday_radio" id="tuesday_radio1">
														<label class="form-check-label" for="tuesday_radio1">24 Hours</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="tuesday_radio" id="tuesday_radio2">
														<label class="form-check-label" for="tuesday_radio2">Set Hours</label>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="site_custom_hours_wrap">
														<input type="time" class="form-control tuesday_from_time" name="from_time"> 
														<div class="site_custom_hours_to">to</div>
														<input type="time" class="form-control tuesday_to_time"  name="to_time">

													</div>
												</li>
											</div>
										</ul>
									</div>
								</div>
								<div class="row site_hours_row_border">
									<div class="col-lg-8">
										<ul class="site_hours_list list-inline">
											<li class="list-inline-item site_switch_position">
												<div class="left-side">
													<label class="switch">
														<input type="checkbox" class="wednesday_checkbox">
														<span class="slider round"></span>
													</label>
												</div>
											</li>
											<li class="list-inline-item site_hours_position">
												<p class="site_hours_day_title mb-0 seprotext">Wednesday</p>
												<p class="site_hours_status_title mb-0 text-success opened_wednesday" style="display: none;">Open</p>
												<p class="site_hours_status_title mb-0 text-muted closed_wednesday">Closed</p>
											</li>
											<div class="wednesday" style="display: none;">
												<li class="list-inline-item">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="wednesday_radio" id="wednesday_radio1">
														<label class="form-check-label" for="wednesday_radio1">24 Hours</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="wednesday_radio" id="wednesday_radio2">
														<label class="form-check-label" for="wednesday_radio2">Set Hours</label>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="site_custom_hours_wrap">
														<input type="time" class="form-control wednesday_from_time" name="from_time"> 
														<div class="site_custom_hours_to">to</div>
														<input type="time" class="form-control wednesday_to_time"  name="to_time">

													</div>
												</li>
											</div>
										</ul>
									</div>
								</div>
								<div class="row site_hours_row_border">
									<div class="col-lg-8">
										<ul class="site_hours_list list-inline">
											<li class="list-inline-item site_switch_position">
												<div class="left-side">
													<label class="switch">
														<input type="checkbox" class="thursday_checkbox">
														<span class="slider round"></span>
													</label>
												</div>
											</li>
											<li class="list-inline-item site_hours_position">
												<p class="site_hours_day_title mb-0 seprotext">Thursdsay</p>
												<p class="site_hours_status_title mb-0 text-success opened_thursday" style="display: none;">Open</p>
												<p class="site_hours_status_title mb-0 text-muted closed_thursday">Closed</p>
											</li>
											<div class="thursdsay" style="display: none;">
												<li class="list-inline-item">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="thursday_radio" id="thursday_radio1">
														<label class="form-check-label" for="thursday_radio1">24 Hours</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="thursday_radio" id="thursday_radio2">
														<label class="form-check-label" for="thursday_radio2">Set Hours</label>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="site_custom_hours_wrap">
														<input type="time" class="form-control thursdsay_from_time" name="from_time"> 
														<div class="site_custom_hours_to">to</div>
														<input type="time" class="form-control thursdsay_to_time"  name="to_time">

													</div>
												</li>
											</div>
										</ul>
									</div>
								</div>
								<div class="row site_hours_row_border">
									<div class="col-lg-8">
										<ul class="site_hours_list list-inline">
											<li class="list-inline-item site_switch_position">
												<div class="left-side">
													<label class="switch">
														<input type="checkbox" class="friday_checkbox">
														<span class="slider round"></span>
													</label>
												</div>
											</li>
											<li class="list-inline-item site_hours_position">
												<p class="site_hours_day_title mb-0 seprotext">Friday</p>
												<p class="site_hours_status_title mb-0 text-success opened_friday" style="display: none;">Open</p>
												<p class="site_hours_status_title mb-0 text-muted closed_friday">Closed</p>
											</li>
											<div class="friday" style="display: none;">
												<li class="list-inline-item">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="friday_radio" id="friday_radio1">
														<label class="form-check-label" for="friday_radio1">24 Hours</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="friday_radio" id="friday_radio2">
														<label class="form-check-label" for="friday_radio2">Set Hours</label>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="site_custom_hours_wrap">
														<input type="time" class="form-control friday_from_time" name="from_time"> 
														<div class="site_custom_hours_to">to</div>
														<input type="time" class="form-control friday_to_time"  name="to_time">

													</div>
												</li>
											</div>
										</ul>
									</div>
								</div>
								<div class="row site_hours_row_border">
									<div class="col-lg-8">
										<ul class="site_hours_list list-inline">
											<li class="list-inline-item site_switch_position">
												<div class="left-side">
													<label class="switch">
														<input type="checkbox" class="saturday_checkbox">
														<span class="slider round"></span>
													</label>
												</div>
											</li>
											<li class="list-inline-item site_hours_position">
												<p class="site_hours_day_title mb-0 seprotext">Saturday</p>
												<p class="site_hours_status_title mb-0 text-success opened_saturday" style="display: none;">Open</p>
												<p class="site_hours_status_title mb-0 text-muted closed_saturday">Closed</p>
											</li>
											<div class="saturday" style="display: none;">
												<li class="list-inline-item">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="saturday_radio" id="saturday_radio1">
														<label class="form-check-label" for="saturday_radio1">24 Hours</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="saturday_radio" id="saturday_radio2">
														<label class="form-check-label" for="saturday_radio2">Set Hours</label>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="site_custom_hours_wrap">
														<input type="time" class="form-control saturday_from_time" name="from_time"> 
														<div class="site_custom_hours_to">to</div>
														<input type="time" class="form-control saturday_to_time"  name="to_time">

													</div>
												</li>
											</div>
										</ul>
									</div>
								</div>
								<div class="row site_hours_row_border">
									<div class="col-lg-8">
										<ul class="site_hours_list list-inline">
											<li class="list-inline-item site_switch_position">
												<div class="left-side">
													<label class="switch">
														<input type="checkbox" class="sunday_checkbox">
														<span class="slider round"></span>
													</label>
												</div>
											</li>
											<li class="list-inline-item site_hours_position">
												<p class="site_hours_day_title mb-0 seprotext">Sunday</p>
												<p class="site_hours_status_title mb-0 text-success opened_sunday" style="display: none;">Open</p>
												<p class="site_hours_status_title mb-0 text-muted closed_sunday">Closed</p>
											</li>
											<div class="sunday" style="display: none;">
												<li class="list-inline-item">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="sunday_radio" id="sunday_radio1">
														<label class="form-check-label" for="sunday_radio1">24 Hours</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="sunday_radio" id="sunday_radio2">
														<label class="form-check-label" for="sunday_radio2">Set Hours</label>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="site_custom_hours_wrap">
														<input type="time" class="form-control sunday_from_time" name="from_time"> 
														<div class="site_custom_hours_to">to</div>
														<input type="time" class="form-control sunday_to_time"  name="to_time">
													</div>
												</li>
											</div>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Next or back button start -->
						<button type="button" name="previous" class="previous btn btn-outline-primary site_ouline_step_btn">
							<i class="fas fa-arrow-left mr-2"></i> <span>Back</span>
						</button>
						<button type="button" class="next btn btn-primary site_primary_step_btn">
							<span>Next</span> <i class="fas fa-arrow-right ml-2"></i>
						</button>
						<!-- Next or back button end -->
					</fieldset>
					<!-- Step 4 end -->
					<!-- Step 5 start -->
					<fieldset class="d-none0">
						<div class="site_form_heading_wrapper">
							<h2 class="site_form_heading_title">Choose your Cancellation Policy</h2>
							<h5 class="site_form_heading_subtitle">We understand that every venue is different and that a single
							cancellation policy does not fit all. That’s why we provide a spectrum of options for you to choose from"</h5>
						</div>
						<div class="row mb-4">
							<div class="col-lg-12">
								<ul class="site_cancellation_list list-unstyled pl-2">
									<li>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
											<label class="form-check-label" for="defaultCheck2">
												<strong>Flexible</strong>
												<p>Guests may cancel their Booking until 7 days before the event start time and will receive a full refund
													(including all Fees) of their Booking Price. Guests may cancel their Booking between 7 days and 24 
													hours before the event start time and receive a 50% refund (excluding Fees) of their Booking Price. 
													Booking cancellations submitted less than 24 hours before the Event start time are not refundable. 
												See Additional Terms section below for more information.</p>
											</label>

											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadioes" value="option1" >
											<label class="form-check-label" for="exampleRadioes">yes</label>
											<input class="form-check-inputs ml-2" type="radio" name="exampleRadios" id="exampleRadioes1" value="option2" >
											<label class="form-check-labels ml-3" for="exampleRadioes">No</label>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- Next or back button start -->
						<button type="button" name="previous" class="previous btn btn-outline-primary site_ouline_step_btn">
							<i class="fas fa-arrow-left mr-2"></i> <span>Back</span>
						</button>
						<button type="button" class="next btn btn-primary site_primary_step_btn">
							<span>Next</span> <i class="fas fa-arrow-right ml-2"></i>
						</button>
						<!-- Next or back button end -->
					</fieldset>
					<!-- Step 5 end -->
					<!-- Step 6 start -->
					<fieldset class="d-none0">
						<div class="site_form_heading_wrapper">
							<h2 class="site_form_heading_title">Select activities </h2>
							<h5 class="site_form_heading_subtitle">Choose how guests will use your venue. For each selection, we will 
							create a customized listing to attract the right guest looking for your venue.</h5>
						</div>
						<div class="site_activites_box">
							<h4 class="site_activites_price_title seprotext mb-4">Select activities</h4>
							<ul class="site_activities_check_list list-inline">
								@foreach($categories as $category)
								<li class="list-inline-item">
									<div class="form-check">
										<button type="button" class="btn btn-primary1">
											<img src="/images/{{ $category->image}}" class="img-fluid" alt="">
											{{$category->name}}
										</button>
										<label class="form-check-label" for="btn btn-primary1">
										</label>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<div class="row"><div class="col-12 mb-5"></div></div>
						<!-- Next or back button start -->
						<button type="button" name="previous" class="previous btn btn-outline-primary site_ouline_step_btn">
							<i class="fas fa-arrow-left mr-2"></i> <span>Back</span>
						</button>
						<button type="button" class="next btn btn-primary site_primary_step_btn">
							<span>Next</span> <i class="fas fa-arrow-right ml-2"></i>
						</button>
						<!-- Next or back button end -->
					</fieldset>
					<!-- Step 6 end -->
					<!-- Step 7 start -->
					<fieldset class="d-none0">
						<div class="site_form_heading_wrapper">
							<h2 class="site_form_heading_title">Pricing </h2>
							<h5 class="site_form_heading_subtitle">Choose how guests will use your venue. For each selection, we will create a customized listing to attract the right guest looking for your venue.</h5>
						</div>
						<div class="site_activites_box">
							<h4 class="site_activites_price_title seprotext mb-4">Pricing</h4>
							<div class="row">
								<div class="col-lg-4">
									<label>Hourly rate</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">$</span>
										</div>
										<input type="number" class="form-control" placeholder="2" aria-label="Username" aria-describedby="basic-addon1">
									</div>
								</div>
								<div class="col-lg-6">
									<label>Minimum number of hours</label>
									<div class="input-group mb-4">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon2"><i class="fas fa-calendar-day"></i></span>
										</div>
										<input type="number" class="form-control" placeholder="1-12 hours" aria-label="Username" aria-describedby="basic-addon2">
									</div>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12">
									<div class="site_cleaning_title">Cleaning Fee</div>
									<p class="site_ashost_desc">As a host you are responsible for cleaning up after each booking. You can charge an additional flat fee to cover any costs associated with cleaning.</p>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-4 mb-4">
											<div class="row">
												<div class="col-lg-12 mb-1">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
														<label class="form-check-label" for="exampleRadios1">
															Included in hourly rate
														</label>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
														<label class="form-check-label" for="exampleRadios2">
															Additional flat fee
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<input type="number" class="form-control" placeholder="2" aria-label="Username" aria-describedby="basic-addon4">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon4">$</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<h4 class="site_activites_price_title seprotext mb-4">Capacity</h4>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-4">
									<label>Maximum number of guests</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon6"><i class="fas fa-user"></i></span>
										</div>
										<input type="number" class="form-control" placeholder="2" aria-label="Username" aria-describedby="basic-addon6">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<h4 class="site_activites_price_title seprotext mb-4">Included Amenities</h4>
									<p class="site_ashost_desc mb-5">These amenities are included with the venue and are available for use by guests.</p>
									<ul class="site_activities_check_list list-inline">
										@foreach($amenities as $amenity)
										<li class="list-inline-item">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="defaultCheck10" checked>
												<label class="form-check-label" for="defaultCheck10">
													{{$amenity->name}}
												</label>
											</div>
										</li>
										@endforeach
									</ul>
									<p class="site_addyourown_title">Add your own amenities</p>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Optional" aria-label="Username" aria-describedby="basic-addon6">
										<div class="input-group-prepend">
											<button class="input-group-text" id="basic-addon6">Add</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Next or back button start -->
						<button type="button" name="previous" class="previous btn btn-outline-primary site_ouline_step_btn">
							<i class="fas fa-arrow-left mr-2"></i> <span>Back</span>
						</button>
						<button type="button" class="next btn btn-primary site_primary_step_btn">
							<span>Next</span> <i class="fas fa-arrow-right ml-2"></i>
						</button>
						<!-- Next or back button end -->
					</fieldset>
					<!-- Step 7 end -->
					<!-- Step 8 start -->
					<fieldset class="d-none0">
						<div class="site_form_heading_wrapper">
							<h2 class="site_form_heading_title">Who will guests be contacting? </h2>
						</div>
						<div class="row mb-4">
							<div class="col-lg-8">
								<div class="row mb-4">
									<div class="col-lg-6">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control" required="" id="" name="" placeholder="Alice">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-control" required="" id="" name="" placeholder="W Heideman">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Contact Number</label>
											<input type="text" class="form-control" required="" id="" name="" placeholder="*********2332">
										</div>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-lg-12">
										<h5 class="site_profile_photo_title seprotext mb-4">Add a profile photo with your face</h5>
										<ul class="list-inline">
											<li class="list-inline-item">
												<img src="images/user.png" class="site_your_profile_thumb img-fluid" alt=""></li>
											<li class="list-inline-item">
												<div class="site_input_file btn btn-lg btn-primary">
													Upload
													<input type="file" name="file">
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-lg-12">
										<h5 class="site_profile_photo_title seprotext mb-4">How did you hear about hosting with Commonvenue?</h5>
										<ul class="site_profile_check_list list-inline">
											<li class="list-inline-item">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
													<label class="form-check-label" for="defaultCheck10">
														Billboard
													</label>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck11">
													<label class="form-check-label" for="defaultCheck11">
														Online search
													</label>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck12">
													<label class="form-check-label" for="defaultCheck12">
														Billboard
													</label>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck13">
													<label class="form-check-label" for="defaultCheck13">
														Mail or flyer
													</label>
												</div>
											</li>
										</ul>
										<ul class="site_profile_check_list list-inline">
											<li class="list-inline-item">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck14">
													<label class="form-check-label" for="defaultCheck14">
														TV
													</label>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
													<label class="form-check-label" for="defaultCheck15">
														Social media
													</label>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck16">
													<label class="form-check-label" for="defaultCheck16">
														TV
													</label>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck17">
													<label class="form-check-label" for="defaultCheck17">
														Social media
													</label>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Next or back button start -->
						<button type="button" name="previous" class="previous btn btn-outline-primary site_ouline_step_btn">
							<i class="fas fa-arrow-left mr-2"></i>
							<span>Back</span>
						</button>
						<button type="button" class="next btn btn-primary site_primary_step_btn">
							<span>Next</span>
							<i class="fas fa-arrow-right ml-2"></i>
						</button>
						<!-- Next or back button end -->
					</fieldset>
					<!-- Step 8 end -->
					<!-- Step 9 start -->
					<fieldset class="d-block0 text-center">
						<div class="site_form_heading_wrapper mb-5">
							<div class="site_alert_circle mb-4"><i class="fas fa-check"></i></div>
							<h2 class="site_form_heading_title">Welcome to the team! </h2>
							<p class="site_yourlisting_desc">Your listing will be active shortly, get ready to host memorable events.</p>
						</div>
						<!-- Next or back button start -->
				<!--button type="button" name="previous" class="previous btn btn-outline-primary site_ouline_step_btn">
					<i class="fas fa-arrow-left mr-2"></i> <span>Back</span>
				</button-->
				<button type="submit" name="submit" class="submit btn btn-primary site_primary_step_btn">
					<span>
						Continue
					</span>
					<i class="fas fa-arrow-right ml-2"></i>
				</button>
				<!-- Next or back button end -->
			</fieldset>
			<!-- Step 9 end -->
		</form>
		<!-- Form end -->  
	</div>
</div>
</div>
</section>

<!-- Section 1 end --> 
{{-- <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script> --}}
<script type="text/javascript">
	$(document).ready(function(){
		var form_count = 1, form_count_form, next_form, total_forms;
		total_forms = $("fieldset").length;  
		$(".next").click(function(){

			form_count_form = $(this).parent();
			next_form = $(this).parent().next();
			next_form.show();
			form_count_form.hide();
			setProgressBar(++form_count);


			$( 'html, body' ).animate( {
				scrollTop: $( ".site_step_form_column" ).offset().top - 10
			}, 500 );


		});  
		$(".previous").click(function(){
			form_count_form = $(this).parent();
			next_form = $(this).parent().prev();
			next_form.show();
			form_count_form.hide();
			setProgressBar(--form_count);

			$( 'html, body' ).animate( {
				scrollTop: $( ".site_step_form_column" ).offset().top - 10
			}, 500 );

		});
		setProgressBar(form_count);  
		function setProgressBar(curStep){
			var percent = parseFloat(100 / total_forms) * curStep;

			$('.site_step_count').html("Step "+form_count);	  

			percent = percent.toFixed();
			$(".progress-bar").css("width",percent+"%").html(percent+"%");
			$('.site_percentage').css("width",percent+"%").html(percent+"% Completed");	  
		} 
		
		
		$('.site_primary_step_btn_address').click(function(e) {
			e.preventDefault();

			var country = $("input[name=country]").val();
			var city = $("input[name=city]").val();
			var state = $("input[name=state]").val();
			var unit = $("input[name=unit]").val();
			var postal_code = $("input[name=postal_code]").val();
			var address_1 = $("input[name=address_1]").val();
			var address_2 = $("input[name=address_2]").val();
			var longitude = $("input[name=longitude]").val();
			var latitude = $("input[name=latitude]").val();
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('.csrf-token').val()
				},
				type: "POST",
				url: "{{ url('addresses/store') }}",
				dataType: "JSON",
				data:{
					"_token": "{{ csrf_token() }}",
					country:country,
					city:city,
					state:state,
					unit:unit,
					postal_code:postal_code,
					address_1:address_1,
					address_2:address_2,
					longitude:longitude,
					latitude:latitude
				},
				success: function(res) {
					console.log(res)
				},
				error: function(error) {
					console.log(error)
				}
			});
		});

  // Handle form submit and validation
  /*$( "#user_form" ).submit(function(event) {    
	var error_message = '';
	if(!$("#email").val()) {
		error_message+="Please Fill Email Address";
	}
	if(!$("#password").val()) {
		error_message+="<br>Please Fill Password";
	}
	if(!$("#mobile").val()) {
		error_message+="<br>Please Fill Mobile Number";
	}*/
	// Display error if any else submit form
	/*if(error_message) {
		$('.alert-success').removeClass('d-none').html(error_message);
		return false;
	} else {
		return true;	
	}    
}); */

	
	$('.monday_checkbox:checkbox').click(function(){
        if($(this).prop("checked") == true){
			$('.closed_monday').hide();
			$('.opened_monday').show();
			$('.monday').css('display','inline-block');
        }
        else if($(this).prop("checked") == false){
        	$('.closed_monday').show();
			$('.opened_monday').hide();
			$('.monday').hide();
        }
    });
	$('.tuesday_checkbox:checkbox').click(function(){
        if($(this).prop("checked") == true){
			$('.closed_tuesday').hide();
			$('.opened_tuesday').show();
			$('.tuesday').css('display','inline-block');
        }
        else if($(this).prop("checked") == false){
        	$('.closed_tuesday').show();
			$('.opened_tuesday').hide();
			$('.tuesday').hide();
        }
    });
	$('.wednesday_checkbox:checkbox').click(function(){
        if($(this).prop("checked") == true){
			$('.closed_wednesday').hide();
			$('.opened_wednesday').show();
			$('.wednesday').css('display','inline-block');
        }
        else if($(this).prop("checked") == false){
        	$('.closed_wednesday').show();
			$('.opened_wednesday').hide();
			$('.wednesday').hide();
        }
    });
	$('.thursday_checkbox:checkbox').click(function(){
        if($(this).prop("checked") == true){
			$('.closed_thursdsay').hide();
			$('.opened_thursdsay').show();
			$('.thursdsay').css('display','inline-block');
        }
        else if($(this).prop("checked") == false){
        	$('.closed_thursdsay').show();
			$('.opened_thursdsay').hide();
			$('.thursdsay').hide();
        }
    });
	$('.friday_checkbox:checkbox').click(function(){
        if($(this).prop("checked") == true){
			$('.closed_friday').hide();
			$('.opened_friday').show();
			$('.friday').css('display','inline-block');
        }
        else if($(this).prop("checked") == false){
        	$('.closed_friday').show();
			$('.opened_friday').hide();
			$('.friday').hide();
        }
    });
	$('.saturday_checkbox:checkbox').click(function(){
        if($(this).prop("checked") == true){
			$('.closed_saturday').hide();
			$('.opened_saturday').show();
			$('.saturday').css('display','inline-block');
        }
        else if($(this).prop("checked") == false){
        	$('.closed_saturday').show();
			$('.opened_saturday').hide();
			$('.saturday').hide();
        }
    });
	$('.sunday_checkbox:checkbox').click(function(){
        if($(this).prop("checked") == true){
			$('.closed_sunday').hide();
			$('.opened_sunday').show();
			$('.sunday').css('display','inline-block');
        }
        else if($(this).prop("checked") == false){
        	$('.closed_sunday').show();
			$('.opened_sunday').hide();
			$('.sunday').hide();
        }
    });
    // $('#monday_radio1').click(function() {
	   // if($('#monday_radio1').is(':checked')) { alert("it's checked"); }
	// });

});		 
</script>
@endsection