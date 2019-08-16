@extends('layouts.master')

@section('content')
<!-- Section 1 start -->

<section class="site_section_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12"><h1 class="site_page_title">Edit</h1>  </div>  
		</div>  
		<hr class="mt-2 mb-5">  
		<div class="row mb-4">
			<div class="col-lg-12"><h4 class="site_select_category_title">Select Category</h4> </div>  
		</div>  	
		<div class="row">
			<div class="col-lg-12">
				<ul class="site_select_catgory_list list-unstyled row">
					<li class="col">
						<a href="#">
							<img src="../vendor/images/meetings-thumb.png" class="img-fluid" alt="">
							<p>Meetings</p>
						</a>	
					</li>
					<li class="col">
						<a href="#">
							<img src="../vendor/images/outdoor-thumb.png" class="img-fluid" alt="">
							<p>Outdoor</p>
						</a>	
					</li>
					<li class="col">
						<a href="#">
							<img src="../vendor/images/wedding-thumb.png" class="img-fluid" alt="">
							<p>Weddings</p>
						</a>	
					</li>
					<li class="col">
						<a href="#">
							<img src="../vendor/images/meetings-thumb.png" class="img-fluid" alt="">
							<p>Meetings</p>
						</a>	
					</li>
					<li class="col">
						<a href="#">
							<img src="../vendor/images/outdoor-thumb.png" class="img-fluid" alt="">
							<p>Outdoor</p>
						</a>	
					</li>
					<li class="col">
						<a href="#">
							<img src="../vendor/images/wedding-thumb.png" class="img-fluid" alt="">
							<p>Weddings</p>
						</a>	
					</li>
					<li class="col">
						<a href="#">
							<img src="../vendor/images/wedding-thumb.png" class="img-fluid" alt="">
							<p>Weddings</p>
						</a>	
					</li>

				</ul>

			</div>

		</div>  

		<div class="row mb-5">
			<div class="col-lg-12">
				<div class="site_mylist_card site_mylist_edit_card card mb-4">
					<div class="card-body">
						<form role="form" class="form-edit-add" method="POST" action="{{ route('addresses.store') }}">
			            	@csrf
							<label>Address</label>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Country</label>
										<input type="text" class="form-control" name="country">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">City</label>
										<input type="text" class="form-control" name="city">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">State</label>
										<input type="text" class="form-control" name="state">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Unit</label>
										<input type="text" class="form-control" name="street_1">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Zip/Postal Code</label>
										<input type="text" class="form-control" name="postal_code">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<button id="hiddenButton" type="submit" class="btn btn-primary site_btn_lg" style="float: right;visibility: hidden;">Save</button>
									</div>				  
								</div>
							</div>
						</form>
					</div>	
					<hr class="bg-dark my-0">
					<div class="card-body">
						<form method="POST" action="{{ route('properties.store') }}"  enctype="multipart/form-data">
			            	@csrf
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Name</label>
										<input type="text" class="form-control" id="" placeholder=" Lorium ipsum, Torronto" name="name">
									</div>					
									<div class="form-group">
										<label>Price</label>
										<input type="text" class="form-control" id="" placeholder=" Lorium ipsum, Torronto" name="price">
									</div>					
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" id="" rows="5" placeholder="Lorium ipsum, Torronto" name="description"></textarea>
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
				</div>		  
			</div>
		</div>
	</div>
</section>
@endsection

