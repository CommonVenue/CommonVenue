@extends('layouts.master')

@section('content')
<section class="site_section_wrapper bg-light">
  <div class="container">
	<div class="row mb-5">
		<div class="col-lg-12">
			<h1 class="site_page_title">Reviews</h1>
		</div>  
	</div>  
	<div class="row">
		<div class="col-lg-12">
			<ul class="site_reviews_list list-unstyled">
				@foreach($reviews as $review)
				<li class="media">
					<div class="site_reviews_thumb mr-3">
						<img src="{{ isset($user) ? asset('/images/'.$user->avatar) : "" }}" class="site_reviews_images" alt="...">
						<div class="site_reviews_username">{{ $review->user->first_name }}</div>  
					</div>
					<div class="media-body">
			      		<p>{{ $review->text }}</p>
			      		<div class="row">
							<div class="col-lg-6">
								<strong>{{ $review->created_at }}</strong>
							</div>
							<div class="col-lg-6">
								<div class="site_reply_btn">
									<a href="#" class="btn btn-primary site_btn px-4">Reply</a>
								</div>
							</div>
				  		</div>	
			    	</div>
			  	</li>
			  	@endforeach
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<nav class="site_pagination_nav">
				<ul class="pagination justify-content-end">
			  		<li class="page-item">
						<a class="page-link" href="#">
							<i class="fas fa-chevron-left"></i>
						</a>
					</li>
					<li class="page-item active">
						<a class="page-link" href="#">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">
							<i class="fas fa-chevron-right"></i>
						</a>
					</li>
				</ul>
			</nav>			
		</div>
	</div>	  
  </div>
</section>
@endsection