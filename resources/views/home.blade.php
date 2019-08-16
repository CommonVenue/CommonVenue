@extends('layouts.master')

@section('content')

<!-- Slider Start -->
<div id="site_fullscreen_carousel" class="carousel slide site_fullscreen_carousel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url(images/slider/slider2.png);">
      <div class="site_slider_overlay d-flex w-100 h-100">
        <div class="container my-auto">
          <div class="row mb-4">
            <div class="col-lg-11 mx-auto text-light">
              <h1 class="site_slide_title mb-4">Whatever your event, we have got a venue </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-11 mx-auto">
              <div class="site_banner_search_box">
                <form class="site_venue_search">
                  <div class="form-row">
                    <div class="col-lg-3">
                      <input type="text" class="form-control dropdown-toggle" placeholder="Enter Location" id="locationdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        <div class="site_field_dropdown dropdown-menu" aria-labelledby="locationdropdown">
                         <a class="dropdown-item" href="#">Party</a>
                         <a class="dropdown-item" href="#">Meeting</a>
                         <a class="dropdown-item" href="#">Workshop</a>
                         <a class="dropdown-item" href="#">Film Shoot</a>
                         <a class="dropdown-item" href="#">Photo Shoot</a>
                         <a class="dropdown-item text-primary" href="#">See all popular activities</a>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 site_left_right_border">
                      <input type="text" class="form-control" placeholder="Enter your Activity">
                    </div>
                    <div class="col-lg-3">
                      <input type="text" class="form-control" placeholder="Select Date" id="datedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="site_datefield_dropdown dropdown-menu" aria-labelledby="datedropdown">
                            
                            <div class="row no-gutters">
                                <div class="col-lg-6 site_border_right"><div id="calendar" class="site_sidebar_calender"></div></div>
                                <div class="col-lg-6">
                                    <div class="site_slot_wrap text-center">
                                    <select class="form-control border-light mb-5">
                                        <option value="0">Select slot</option>
                                        <option value="0">Select slot</option>
                                        <option value="0">Select slot</option>
                                        <option value="0">Select slot</option>
                                    </select>
                                        
                                    <a href="#" class="btn btn-primary site_btn_lg btn-block">Search</a>    
                                    <a href="#" class="btn btn-link">Clear</a>      
                                    </div>  
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="site_search_wrap">
                        <span class="site_circle_btn_text">Search</span>
                        <a href="../users/search.html" class="btn btn-primary site_circle_btn site_circle_btn_shadow"><i class="fas fa-arrow-right"></i></a>
                        </div>  
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        

        <div class="site_slide_small_text"><small>Lorem ipsum dolor sit amet, adipiscing sed do esmod  sed sit tempor</small></div>                       
          
          
      </div>
        
      
        
    </div>
  </div>
  <!--a class="carousel-control-prev" href="#site_main_slider" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#site_main_slider" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a--> 
</div>
<!-- Slider end --> 

<!-- Section 1 start -->



<!-- Section 1 end --> 

<section class="site_section_wrapper">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8 mx-auto">
        <div class="site_space_belongs_content">
          <h1 class="site_space_belongs_title mb-4">Book A Space</h1>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($categories as $category)
      <div class="col-lg-4 mb-5">
        <div class="site_space_belongs_box card bg-dark text-white">
          <img src="{{asset('/images/'.$category->image)}}" class="card-img" alt="">
          <a href="#">
            <div class="card-img-overlay d-flex">
              <div class="m-auto">
                <h2 class="card-title">{{ $category->name }}</h2>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Section 1 end --> 

<!-- Section 2 start -->

<section class="site_section_wrapper pt-0">
  <div class="container">
    <div class="row mb-4">
      <div class="col-lg-12 mx-auto">
        <div class="site_section_title_box">
          <h1 class="site_section_title site_hiw_title text-center">How it works?</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
          <div class="site_howitworks_box media">
            <div class="site_howitwork_icon"><i class="fas fa-home"></i></div>
            <div class="media-body">
              <h3 class="mb-2">Find the perfect space</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>  
            </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="site_howitworks_box media">
            <div class="site_howitwork_icon"><i class="fas fa-handshake"></i></div>
            <div class="media-body">
              <h3 class="mb-2">Book with ease</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>  
            </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="site_howitworks_box media">
            <div class="site_howitwork_icon"><i class="fas fa-rocket"></i></div>
            <div class="media-body">
              <h3 class="mb-2">Create experiences</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>  
            </div>
          </div>
      </div>
        
    </div>
  </div>
</section>

<!-- Section 6 end --> 

<!-- Section 7 start -->

<section class="site_section_wrapper py-0">
  <div class="container-fluid px-0">
    <div class="row no-gutters">
      <div class="col-lg-6">
        <div class="site_section_img_box">
          <img src="images/bg-1.png" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="site_section_img_content_box">
            <div class="m-auto">
          <h4 class="mb-4 site_section_img_content_box_title"> "Lorem ipsum dolor sit amet, adipiscing sed do esmod sed sit tempor" </h4>
          <h4 class=" mb-4 site_section_img_content_box_subtitle">Become A Host</h4>
          <a href="index-1.html" class="btn btn-dark site_btn_lg">List a Venue</a> 
        </div>
            </div>
      </div>
        
    </div>
  </div>
</section>

<!-- Section 7 end --> 


@endsection
