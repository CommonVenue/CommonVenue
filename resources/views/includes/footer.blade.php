<!-- Footer Start -->
<div class="site_footer py-5">
  <div class="container">
    <!-- Footer row start -->
    <div class="row">
      <div class="col-lg-4">
        <div class="site_footer_column">
			<div class="site_footer_logo mb-4"><img src="{{ asset('/images//footer-logo.png') }}" class="img-fluid" alt=""></div>
			<h4 class="site_footer_connect_title">Connect with us</h4>
			<p class="site_copyright_text">© 2019 commonvenue. All rights reserved.</p>
        </div>
      </div>

      <div class="col-lg-8">
        {!! menu('footer-menu','menus.footer') !!}
      </div>
    </div>
    <!-- Footer row end -->
  </div>
</div>
<!-- Footer end -->
