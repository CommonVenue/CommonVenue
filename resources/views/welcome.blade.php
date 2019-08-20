@extends('layouts.master')

@section('content')
    
<!-- Slider Start -->
<div id="site_main_slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url(images/slider/slider1.jpg);">
      <div class="site_slider_overlay d-flex w-100 h-100">
        <div class="container my-auto">
          <div class="row mb-4">
            <div class="col-lg-12 text-light">
              <h1 class="site_slide_title mb-4">Earn money as a Commonvenue host </h1>
              <h5 class="site_slide_subtitle">Join thousands of hosts renting their space for meetings,<br>
                events, and film and photo shoots.</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5">
              <div class="site_banner_search_box">
                <form>
                  @csrf
                  <div class="form-row">
                    <div class="col-lg-12 mb-4">
                      <input type="text" class="form-control" placeholder="Country" name="country">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-6 mb-4">
                      <input type="text" class="form-control" placeholder="City" name="city">
                    </div>
                    <div class="col-lg-6 mb-4">
                      <input type="text" class="form-control" placeholder="State" name="state">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-6 mb-4">
                      <input type="number" class="form-control" placeholder="Unit" name="street_1">
                    </div>
                    <div class="col-lg-6 mb-4">
                      <input type="number" class="form-control" placeholder="Zip" name="postal_code">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-12">
                      <span class="site_circle_btn_text">Get Started</span>
                        <a href="/register" class="btn btn-primary site_circle_btn site_circle_btn_shadow">
                          <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--a class="carousel-control-prev" href="#site_main_slider" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#site_main_slider" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a--> 
</div>
<!-- Slider end --> 

<!-- Section 1 start -->

<section class="site_section_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="site_fill_your_content">
          <h1 class="site_fill_your_content_title mb-4">Fill your space’s downtime</h1>
          <p class="site_fill_your_content_subtitle">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut, sed quia.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 1 end --> 

<!-- Section 2 start -->

<section class="site_section_wrapper bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="site_count_box">
          <div class="site_count_box_icon mb-4"><i class="fas fa-users"></i></div>
          <h4 class="site_count_box_title">99%</h4>
          <p class="site_count_box_subtitle">MEETINGS</p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="site_count_box">
          <div class="site_count_box_icon mb-4"><i class="fas fa-camera"></i></div>
          <h4 class="site_count_box_title">10,799</h4>
          <p class="site_count_box_subtitle">PHOTO SHOOTS</p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="site_count_box">
          <div class="site_count_box_icon mb-4"><i class="fas fa-video"></i></div>
          <h4 class="site_count_box_title">800</h4>
          <p class="site_count_box_subtitle">VIDEO SHOOTS </p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="site_count_box">
          <div class="site_count_box_icon mb-4"><i class="fas fa-rocket"></i></div>
          <h4 class="site_count_box_title">17,499</h4>
          <p class="site_count_box_subtitle">EVENTS</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 2 end --> 

<!-- Section 3 start -->

<section class="site_section_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="site_image_box"> <img src="images/bin.png" class="img-fluid" alt="">
          <div class="site_image_box_title">
            <h5 class="mb-0">BIN LOPSUM</h5>
            <p>lorium ipsum 2018</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="site_choosehow_box_wrapper d-flex h-100">
          <div class="site_choosehow_box">
            <div class="site_choosehow_box_content my-auto">
              <h1 class="site_choose_how_title text-primary mb-3">Choose How You Share</h1>
              <p class="mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut, sed quia.</p>
              <a href="/register" class="btn btn-primary site_btn">Ready To Start <i class="fas fa-arrow-right ml-2"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 3 end --> 

<!-- Section 4 start -->

<section class="site_section_wrapper bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="site_how_hosting_box">
          <h1 class="site_how_hosting_title site_letter_spacing_2 mb-5 text-center">How hosting works ?</h1>
        </div>
        <ul class="site_how_hosting_list list-unstyled">
          <li class="media">
            <div class="site_count_circle"><span>1</span></div>
            <div class="media-body">
              <h3 class="my-2">List your space for free</h3>
              Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed venenatis lorem vitae tortor dapibus congue. </div>
          </li>
          <li class="media my-5">
            <div class="site_count_circle"><span>2</span></div>
            <div class="media-body">
              <h3 class="my-2">Welcome guests to your space</h3>
              Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed venenatis lorem vitae tortor dapibus congue. </div>
          </li>
          <li class="media">
            <div class="site_count_circle"><span>3</span></div>
            <div class="media-body">
              <h3 class="my-2">Get paid every time</h3>
              Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed venenatis lorem vitae tortor dapibus congue. </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Section 4 end --> 

<!-- Section 5 start -->

<section class="site_section_wrapper">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8 mx-auto">
        <div class="site_space_belongs_content">
          <h1 class="site_space_belongs_title mb-4">Space belongs on Commonvenue</h1>
          <p class="site_space_belongs_subtitle">We helparius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed venenatis lorem vitae tortor dapibus congue. </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-5">
        <div class="site_space_belongs_box card bg-dark text-white"> <img src="images/MaskGroup4.png" class="card-img" alt=""> <a href="#">
          <div class="card-img-overlay d-flex">
            <div class="m-auto">
              <h2 class="card-title">Bars</h2>
            </div>
          </div>
          </a> </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="site_space_belongs_box card bg-dark text-white"> <img src="images/MaskGroup5.png" class="card-img" alt=""> <a href="#">
          <div class="card-img-overlay d-flex">
            <div class="m-auto">
              <h2 class="card-title">Bars</h2>
            </div>
          </div>
          </a> </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="site_space_belongs_box card bg-dark text-white"> <img src="images/MaskGroup6.png" class="card-img" alt=""> <a href="#">
          <div class="card-img-overlay d-flex">
            <div class="m-auto">
              <h2 class="card-title">Birthday Parties</h2>
            </div>
          </div>
          </a> </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="site_space_belongs_box card bg-dark text-white"> <img src="images/MaskGroup7.png" class="card-img" alt=""> <a href="#">
          <div class="card-img-overlay d-flex">
            <div class="m-auto">
              <h2 class="card-title">Photoshoots</h2>
            </div>
          </div>
          </a> </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="site_space_belongs_box card bg-dark text-white"> <img src="images/MaskGroup8.png" class="card-img" alt=""> <a href="#">
          <div class="card-img-overlay d-flex">
            <div class="m-auto">
              <h2 class="card-title">Workshop</h2>
            </div>
          </div>
          </a> </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="site_space_belongs_box card bg-dark text-white"> <img src="images/MaskGroup9.png" class="card-img" alt=""> <a href="#">
          <div class="card-img-overlay d-flex">
            <div class="m-auto">
              <h2 class="card-title">Babyshowers</h2>
            </div>
          </div>
          </a> </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 5 end --> 

<!-- Section 6 start -->

<section class="site_section_wrapper bg-light site_c_png">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="site_how_hosting_box">
          <h1 class="site_how_hosting_title mb-5 text-center">How is Commonvenue different ?</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <ul class="site_commonvenue_list list-unstyled">
          <li class="media">
            <div class="site_commonvenue_check"><span><i class="fas fa-check"></i></span></div>
            <div class="media-body">
              <h3 class="my-1">Zero paperwork</h3>
              We do all the paperwork for you like agreement creation. </div>
          </li>
          <li class="media">
            <div class="site_commonvenue_check"><span><i class="fas fa-check"></i></span></div>
            <div class="media-body">
              <h3 class="my-1">Rent on time</h3>
              We guarantee timely rent, every month/day/hour. </div>
          </li>
          <li class="media">
            <div class="site_commonvenue_check"><span><i class="fas fa-check"></i></span></div>
            <div class="media-body">
              <h3 class="my-1">Marketing & promotion</h3>
              We promote through Ads & other rental platforms </div>
          </li>
          <li class="media">
            <div class="site_commonvenue_check"><span><i class="fas fa-check"></i></span></div>
            <div class="media-body">
              <h3 class="my-1">Support on every booking</h3>
              In the rare case something goes wrong, our support team is here to help. We’re open every day of the year. </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Section 6 end --> 

<!-- Section 7 start -->

<section class="site_section_wrapper py-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="site_need_consultation_box">
          <h1 class="site_need_consultation_title mb-4">Need a consultation?</h1>
          <p class="site_need_consultation_subtitle mb-4">Our team is here to help. Tell us about your space, and our team will reach out with a helping hand.</p>
          <a href="#" class="btn btn-primary site_btn">Ready To Start <i class="fas fa-arrow-right ml-2"></i></a> </div>
      </div>
      <div class="col-lg-6 site_newsletter_bg">
        <div class="site_newsletter_box">
          <div class="site_newsletter_inner">
            <h1 class="site_newsletter_title mb-4">Subscribe Our Newsletter</h1>
            <div class="site_newsletter_form">
              <form class="form-inline" action="{{ route('subscribe') }}" method="POST">
                @csrf
                <div class="form-group mr-3 mb-2">
                  <input type="hidden" class="csrf-token"  value="{{  csrf_token() }}">
                  <input type="email" class="form-control rounded-0" name="email" placeholder="Enter your email Here" aria-label="Email address">
                </div>
                <button type="submit" class="btn btn-primary mb-2 site_btn_lg">SUBSCRIBE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 7 end --> 

<!-- Section 8 start -->

<section class="site_section_wrapper bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="site_commonquestion_box">
          <h1 class="site_commonquestion_box_title mb-5 text-center">Common questions</h1>
        </div>
        <div class="site_accordion accordion" id="accordion1">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#a1" aria-expanded="true">Who can be a Commonvenue  host?</button>
              </h5>
            </div>
            <div id="a1" class="collapse show" data-parent="#accordion1">
              <div class="card-body">
                <p>Memory Training programs cost between $149 - $179. Their systems are awkward and difficult to use.</p>
                <p>SMPL is simple and easy to use.</p>
                <p>This is not a bait and switch offer. We don't give you a teaser version of our service and then push you to buy the full version. We give you the entire training for free, period.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#a2" aria-expanded="false">How do I get paid?</button>
              </h5>
            </div>
            <div id="a2" class="collapse" data-parent="#accordion1">
              <div class="card-body">
                <p>Simple Memory Programming Language. Don't let the word "Programming" scare you. If you know the alphabet and you can count to 10, you can use SMPL. It was deliberately created to be make memory training available to anyone who can count to 10 and knows the alphabet.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#a3" aria-expanded="false"> Does Commonvenue  provide insurance? </button>
              </h5>
            </div>
            <div id="a3" class="collapse" data-parent="#accordion1">
              <div class="card-body">
                <p>For as long as you are a member. Membership is free.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#a4" aria-expanded="false"> How does Commonvenue  make money? </button>
              </h5>
            </div>
            <div id="a4" class="collapse" data-parent="#accordion1">
              <div class="card-body">
                <p>For as long as you are a member. Membership is free.</p>
              </div>
            </div>
          </div>            
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 8 end --> 

@endsection