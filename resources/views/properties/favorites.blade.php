@extends('layouts.master')

@section('content')
<section class="site_section_wrapper">
	<div class="container">
		<div class="row"><div class="col-lg-12 text-center"><h1>Favourite</h1></div></div>
		<hr class="mt-2 mb-4">  
		<p class="site_search_showing_title mb-5">Showing 1-20 of 122 meeting spaces near Toronto</p>  
		<div class="row mb-5">
			@foreach($properties as $property)
			<div class="col-lg-3 mb-4 block-{{$property->id}}">
				<div class="site_venue_box card">
					<img src="{{ asset('/images/'.$property->image) }}" class="card-img-top" alt="">
					<div class="card-body">
						<p class="site_venue_title"><a href="{!! route('properties.show',[$property->id]) !!}">{{ $property->name }}</a></p>
						<p class="site_venue_address mb-1">{{ $property->address->country }} {{ $property->address->state }} {{ $property->address->city }}</p>
						<p class="site_venue_response">Responds within 2 hrs</p>  
						<div class="site_venue_rating mb-3">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star site_light_color"></i>
							<span>212</span>
						</div> 
						<div class="site_venue_price_row row">
							<div class="col">
								<div class="site_venue_prirce">${{ $property->price }} <span>/hr</span>
								</div>
							</div>  
							<div class="col">
								<div class="site_favorite_icon">
									<a href="#" data-id="{{ $property->id }}">
										@if (isFavoriteProperty(Auth::user(), $property->id)) 
											<i class="like-{{$property->id}} fas fa-heart"></i>
										@else
											<i class="like-{{$property->id}} far fa-heart"></i>
										@endif
									</a>
								</div>
							</div>
						</div>  
					</div>
				</div>        
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-lg-12">
				<nav class="site_pagination_nav">
					<span class="site_pagination_show_title">Showing 1-20 of 122</span>
					<ul class="pagination justify-content-end">
						<li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
					</ul>
				</nav>			
			</div>
		</div>  
		<hr class="mb-4">
		<div class="row"><div class="col-lg-12 site_join_title"><p>Join our email list and be the first to know when we add new spaces.</p></div></div>
	</div>
</section>
<script type="text/javascript">
  $(document).ready(function() {
  	$('[data-id]').click(function(e) {
      e.preventDefault();

      var self = $(this);
      var id = self.data('id');
      var url = '/favorite/properties/'+id;

      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('.csrf-token').val()
        },
        type: "GET",
        url: url,
        dataType: "JSON",
        data: { id: id },
        success: function(res) {
        	if ( $('i.like-'+id).hasClass('far') ){
        		$('i.like-'+id).removeClass('far');
        		$('i.like-'+id).addClass('fas');
        	}else {
        		$('i.like-'+id).removeClass('fas');
        		$('i.like-'+id).addClass('far');
        		$('div.block-'+id).hide();

        	}
        },
        error: function(error) {
        	console.log(error)
        }
      });
    });
  })
</script>
@endsection