@extends('layouts.master')

@section('content')
<section class="site_section_wrapper">
	<div class="container">
		<div class="site_search_fields_row row">

			<div class="col-lg-3 mb-2">
				<div class="site_input_group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id=""><i class="fas fa-search"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="Search by Ad">
				</div>		  
			</div>
			<div class="col-lg-9 mb-2">
				<ul class="site_filter_btn_list list-inline">
					<li class="list-inline-item">Filter By-</li>	
					<li class="list-inline-item">
						<a href="#" class="btn btn-outline-secondary site_filter_btn">Veiw all</a>
					</li>	
					<li class="list-inline-item">
						<a href="#" class="btn btn-outline-secondary site_filter_btn">Active Ads</a>
					</li>	
					<li class="list-inline-item">
						<a href="#" class="btn btn-outline-secondary site_filter_btn">Pending Ads</a>
					</li>	
				</ul>
			</div>
		</div>
		<hr class="mt-2 mb-4">  
		<div class="row">
			<div class="col">
				<h1 class="site_mylist_title mb-5">My List</h1>
			</div>  
			<div class="col">
				<div class="site_ellipsis_dropdown_wrapper">
					<div class="site_ellipsis_dropdown dropdown">
						<button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>			
				</div>	
			</div>  
		</div>  
		<div class="row mb-5">
			<div class="col-lg-12">
				<div class="table-responsive"> 
					<table class="site_mylist_table table">
						<thead class="thead-light">
							<tr>
								<th scope="col">APPLICATION</th>
								<th scope="col">DESCRIPTION</th>
								<th scope="col">CREATED</th>
								<th scope="col">PRICE</th>
								<th scope="col">STATUS</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($properties as $property)
							<tr>
								<td>
									<div class="site_search_venue_thumb">
										@foreach($property->images->take(1) as $image)
										<img src="{{ Storage::url('images/'.$image->url) }}" class="img-fluid" alt="">
										@endforeach
									</div>
									<div class="site_search_venue_title">
										@foreach($property->property_category->take(1) as $category)
										<strong>{{$category->name}}</strong>
										@endforeach
										<p>{{ $property->address->country }}, {{ $property->address->city }}, {{ $property->address->address_1 }}</p>
									</div>  
								</td>
								<td><p class="site_mylist_desc">{{ $property->description }}</p></td>
								<td><p class="site_mylist_created_date">{{ $property->created_at->format('M d Y') }}</p></td>
								<td><p class="site_mylist_created_date">$ {{ $property->price }}</p></td>
								<td>
									<a href="#" class="btn btn-outline-primary site_status_btn site_status_active">ACTIVE</a>
									{{-- <a href="#" class="btn btn-outline-primary site_status_btn site_status_pending">Pending</a> --}}

									<i class="fas fa-pencil-alt"></i>
								</td>

								<td>
									<form action="{{ route('properties.destroy',$property->id) }}" method="POST">
					                    @csrf @method('DELETE')
										<button class="text-danger" style="border: none;background-color: white;">Remove</button>
					                </form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>  
			</div>
		</div>
		<hr class="mb-4">
		<div class="row">
			<div class="col-lg-12 site_join_title">
				<p>Join our email list and be the first to know when we add new spaces.</p>
			</div>
		</div>
	</div>
</section>
@endsection
