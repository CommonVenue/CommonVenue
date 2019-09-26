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
					@foreach($categories as $category)
					<li class="col">
						<label class="form-check-label" for="{{ $category->id}}">
							<img src="/images/{{ $category->image}}" class="img-fluid property_image property_image_{{ $category->id}}" alt="" data-id="{{ $category->id}}" data-name="{{ $category->name}}">{{$category->name}}
							<input class="category-{{ $category->id }}" type="checkbox" id="{{ $category->id }}" name="category_id" value="{{ $category->id}}">
						</label>
					</li>
					@endforeach
				</ul>
			</div>
		</div>  
		<div class="row mb-5">
			<div class="col-lg-12">
				<div class="site_mylist_card site_mylist_edit_card card mb-4">
					<div class="card-body">
						<form method="POST" action="{{ route('properties.update',$property->id) }}"  enctype="multipart/form-data">
			            	@csrf
			            	@method('PUT')
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Name</label>
										<input type="text" class="form-control" id="" placeholder=" Lorium ipsum, Torronto" name="name" value="{{ $property->name }}">
									</div>					
									<div class="form-group">
										<label>Price</label>
										<input type="text" class="form-control" id="" placeholder=" Lorium ipsum, Torronto" name="price" value="{{ $property->price }}">
									</div>					
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" id="" rows="5" placeholder="Lorium ipsum, Torronto" name="description">{{ $property->description }}</textarea>
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
										<ul class="site_add_images_list list-inline">
											@foreach($property->images as $image)
											<li class="list-inline-item">
												<img src="{{ Storage::url('/images/'.$image->url) }}" class="img-fluid" alt="">
											</li>
											@endforeach
										</ul>
									</div>					
								</div>					
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<button class="btn btn-primary site_btn_lg" style="float: right;">Save</button>
								</div>		  
							</div>		
						</form>
					</div>

					<hr class="bg-dark my-0">

					<div class="card-body">
						<form method="POST" action="{{ route('addresses.update',$address->id) }}">
							@csrf
			            	@method('PUT')
							<label>Address</label>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Country</label>
										<input type="text" class="form-control" value="{{ $address->country }}" name="country">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Unit</label>
										<input type="text" class="form-control" value="{{ $address->unit }}" name="unit">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">City</label>
										<input type="text" class="form-control" value="{{ $address->city }}" name="city">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">State</label>
										<input type="text" class="form-control" value="{{ $address->state }}" name="state">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Address 1</label>
										<input type="text" class="form-control" value="{{ $address ->address_1 }}" name="address_1">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Address 2</label>
										<input type="text" class="form-control" value="{{ $address ->address_2 }}" name="address_2">
									</div>				  
								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Zip/Postal Code</label>
										<input type="text" class="form-control" value="{{ $address ->postal_code }}" name="postal_code">
									</div>				  
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div style="visibility: hidden;"> <label>Save</label></div>
										<button class="btn btn-primary site_btn_lg" style="float: right;">Save</button>
									</div>				  
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