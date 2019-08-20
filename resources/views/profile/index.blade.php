@extends('layouts.master')

@section('content')
<!-- Section 1 start -->

<section class="site_section_wrapper bg-light">
  <div class="container">
	<div class="row">
		<div class="col-lg-12"><h1 class="site_page_title">Profile</h1>  </div>  
	</div>  
	<hr class="mt-2 mb-5">  
	<div class="row">
		<div class="col-lg-6 mb-4">
			<div class="row">
				<div class="col-lg-12"><h4 class="site_select_category_title mb-0">Basic Information</h4> </div>  
			</div>
			<hr class="mb-4">
			<form  method="POST" action="{{ isset($profile) ? route('profile.update') : route('profile.store')  }}"  enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-12"><h4 class="site_select_category_title mb-0">Profile Photo</h4> </div>  
			</div> 
			<ul class="site_select_photo_list list-inline">
				<li class="list-inline-item">
					<img src="{{ isset($profile->avatar) ? asset('/images/'.$profile->avatar) : "" }}" class="site_your_profile_thumb img-fluid" alt="">
				</li>
				<li class="list-inline-item">
					<div class="site_input_file btn btn-lg btn-primary">
						Select Profile Photo
						<input type="file" class="form-control" name="avatar" autocomplete="avatar">
					</div>
				</li>
			</ul>
	
			<hr class="mb-4">
            @csrf
            @if(isset($profile))
            	@method('PUT')
			@endif
			<div class="site_profile_box">
				
			  <div class="form-group row">
				<label class="col-sm-3 col-form-label">First Name</label>
				<div class="col-sm-9">
					<input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ isset($profile->first_name) ? $profile->first_name : "" }}" required autocomplete="first_name" autofocus placeholder="Chad">
				</div>
			  </div>
				
			  <div class="form-group row">
				<label class="col-sm-3 col-form-label">Last Name</label>
				<div class="col-sm-9">
					<input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ isset($profile->last_name) ? $profile->last_name : ""}}" required autocomplete="last_name" autofocus placeholder="Stewart">
				</div>
			  </div>

			  <div class="form-group row">
				<label class="col-sm-3 col-form-label pt-0">Phone Number <small class="text-danger">Verify phone</small></label>
				  
				<div class="col-sm-9">
					<input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ isset($profile->phone_number) ? $profile->phone_number : "" }}" required autocomplete="phone_number" autofocus placeholder="(913)887-2532">
				</div>
			  </div>

			  <div class="form-group row mb-5">
				<label class="col-sm-3 col-form-label d-flex"><span class="my-auto">Description</span></label>
				<div class="col-sm-9">
					<textarea class="form-control" id="" name="description" placeholder="Pellentesque habitant morbi tristique senectus et netus
et malesuada fames ac turpis egestas. Ut arcu libero, nar non massa sed, accumsan scelerisque dui. Morbi purus mauris, vulputate quis felis nec, fermentum aliquam orci. Quisque ornare iaculis placerat." rows="8">{{ isset($profile->description) ? $profile->description : "" }}</textarea>
				</div>
			  </div>

			  <div class="form-group row">
				<label class="col-sm-3 col-form-label"></label>
				<div class="col-sm-9">
					<button class="btn btn-primary site_btn px-5">Save</button> 
				</div>
			  </div>
				</div>	
				
		</div>
		
		
		<div class="col-lg-6">
			<div class="row">
				<div class="col-lg-12 mb-4"><h1 class="site_detail_title">Details</h1></div>  
				<div class="col-lg-12"><h4 class="site_select_category_title mb-0">Address</h4> </div>  
			</div>  	
			<hr class="mb-4">
			
			<div class="site_profile_box">
				
			  <div class="form-group row">
				<label class="col-sm-3 col-form-label">Country</label>
				<div class="col-sm-9">
					<input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ isset($profile->country) ? $profile->country : "" }}" autocomplete="country" autofocus placeholder="United States of America (USA)">
				</div>
			  </div>
				
			  <div class="form-group row mb-5">
				<label class="col-sm-3 col-form-label">Zip/Postal Code</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ isset($profile->postal_code) ? $profile->postal_code : "" }}" autocomplete="postal_code" autofocus id="" placeholder="452221">
				</div>
			  </div>

			<div class="row">
				<div class="col-lg-12"><h4 class="site_select_category_title mb-0">Company Informantion</h4> </div>  
			</div>  	
			<hr class="mb-4">
				
			  <div class="form-group row">
				<label class="col-sm-3 col-form-label">Industry</label>
				<div class="col-sm-9">
					<input type="text" class="form-control @error('industry') is-invalid @enderror" name="industry" value="{{ isset($profile->industry) ? $profile->industry : "" }}" autocomplete="industry" autofocus id="" placeholder="Inovation technology">
				</div>
			  </div>
				
			  <div class="form-group row mb-5">
				<label class="col-sm-3 col-form-label">Job Title</label>
				<div class="col-sm-9">
					<input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{ isset($profile->job_title) ? $profile->job_title : "" }}" autocomplete="job_title" autofocus id="" placeholder="Developer">
				</div>
			  </div>

			  <div class="form-group row mb-5">
				<label class="col-sm-3 col-form-label">Organization</label>
				<div class="col-sm-9">
					<input type="text" class="form-control @error('organization') is-invalid @enderror" name="organization" value="{{ isset($profile->organization) ? $profile->organization : "" }}" autocomplete="organization" autofocus id="" placeholder="Exio.tech">
				</div>
			  </div>
				
{{-- 
			  <div class="form-group row">
				<label class="col-sm-3 col-form-label"></label>
				<div class="col-sm-9">
					<button class="btn btn-primary site_btn px-5">Saved</button> 
				</div>
			  </div> --}}
				</div>	
				
			</form>
		</div>
	</div> 
  </div>
</section>

<!-- Section 1 end --> 
@endsection