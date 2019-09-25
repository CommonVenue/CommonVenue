@extends('layouts.master')

@section('content')
<section class="site_section_wrapper bg-light">
	<div class="container">
		<div class="row mb-4">
			<div class="col-lg-12">
				<h4 class="site_all_read_title">
					All (0 unread)
				</h4>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-4">
				<div class="site_chat_list_box">
					<div class="site_chat_search_box">
						<div class="input-group">
							<div class="input-group-prepend">
								<button class="btn btn-outline-secondary border-0" type="button" id="button-addon1">
									<i class="fas fa-search"></i>
								</button>
							</div>
							<input type="text" class="form-control border-0" placeholder="Search" aria-label="Example text with button addon" aria-describedby="button-addon1">
						</div>
					</div>  
					<ul class="site_chat_list list-unstyled">
						<li class="media">
							<div class="site_chat_name_circle">
								<span>Id</span>
							</div>
							<div class="media-body">
								<div class="row">
									<div class="col-lg-6">
										<h5 class="site_chat_username mb-1">
											ideaUsher
										</h5>
									</div>
									<div class="col-lg-6">
										<p class="site_chat_time mb-0">
											10 min ago
										</p>
									</div>
								</div>
								<div class="mb-2">
									<strong class="site_chat_category">
										Webpage Design
									</strong>
								</div>
								<p class="site_chat_excerpt">
									Vacancy | Walking Interview is on Multiple Position
								</p>
								<a tabindex="0" class="site_chat_elipsis_link" data-html="true" data-toggle="popover" data-placement="bottom" data-trigger="focus" 
								data-content="<div class='site_action_links'><a href='#'><i class='far fa-trash-alt'></i></a> <a href='#'><i class='far fa-heart'></i></a></div>">
								<i class="fas fa-ellipsis-v"></i>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-8 bg-white">
			<div class="site_chat_view_box">
				<div class="site_header_row row mb-2">
					<div class="col-lg-6">
						<div class="d-flex">
							<div class="site_chat_name_circle mr-2">
								<span>Id</span>
							</div>
							<h4 class="site_chat_name">
								ideaUsher
							</h4>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="site_chat_share_icon">
							<a href="#"><i class="fas fa-share"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="site_chat_time_single_row row">
					<div class="col-lg-12">
						<div class="site_chat_time_single">
							10 min ago
						</div>
					</div>
				</div>
				<div class="site_chat_single_row row">
					<div class="col-lg-12">
						<div class="site_chat_single">
							<h4 class="mb-4">Looking for a freelance work.</h4>
							<h4 class="mb-4">Hello Sir,</h4>
							<p class="lead">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed venenatis lorem vitae tortor dapibus congue idiculus mus Sed ven svsdx liso sery.</p>
							<p class="lead mb-0">Thank you</p>
							<p class="lead">Hannry Peter</p>
						</div>
					</div>
				</div>
			</div>
			<div class="site_chat_editor_row row">
				<div class="col-lg-12">
					<div class="site_chat_editor">
						<div class="row mb-2">
							<div class="col-lg-6">
								<a href="#" class="site_ellipsis_h_link">
									<i class="fas fa-ellipsis-h"></i>
								</a>
							</div>
							<div class="col-lg-6">
								<div class="site_expand_link">
									<a href="#" class="">
										<i class="fas fa-arrows-alt-v"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-lg-12">
								<input type="text" class="form-control" placeholder="Click here to Reply or Forward ">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="site_attached_links">
									<a href="#"><i class="fas fa-paperclip"></i></a>
									<a href="#"><i class="far fa-smile"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="site_send_btn">
									<a href="#" class="btn btn-primary site_btn">
										Next
										<i class="fas fa-arrow-right ml-2"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<script type="text/javascript">
	$(function(){
    // Enables popover
    $("[data-toggle=popover]").popover();
});
</script>
@endsection
