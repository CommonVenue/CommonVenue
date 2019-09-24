@php
  $authUser = auth()->user();
@endphp
@if(!is_null($authUser))
<!-- Header Start -->

<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/home">
      <img src="{{ asset('/images/logo.png') }}" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('properties') }}">Find A Venue</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('properties.create') }}">List A Venue</a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="signin.html">Inbox</a></li>
        <li class="nav-item"><a class="nav-link" href="/bookings">Bookings</a></li>
		    <li class="nav-item site_user_dropdown_li dropdown">
          <a class="nav-link site_user_dropdown dropdown-toggle" href="/profile" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="site_user_circle"><i class="far fa-user"></i></div>
          </a>
          <div class="site_booking_dropdown dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('profile.messages') }}">Messages</a>
            <a class="dropdown-item" href="#">Reviews</a>
            <a class="dropdown-item" href="/profile">Profile</a>
            <a class="dropdown-item" href="/favorite/properties">My List</a>
            <a class="dropdown-item" href="#">Payments</a>
            <a class="dropdown-item" href="#">Add a space</a>
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header end -->
@else
<!-- Header Start -->

<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('/images/logo.png') }}" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('properties') }}">Find A Venue</a></li>
        <li class="nav-item"><a class="nav-link login_modal" href="#">List A Venue</a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Header end -->
@endif
