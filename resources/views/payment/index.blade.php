@extends('layouts.master')

@section('content')
<section class="site_section_wrapper bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12"><h1 class="site_page_title">Payments</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-6 site_mobile_text_center">
                <div class="row">
                    <div class="col-lg-12"><h4 class="site_select_category_title mb-0">Credit Card</h4></div>
                </div>
                <hr class="mb-4">
                <p class="mb-5 site_common_venue_text">Adding a credit card allows Common Venue to charge you for reserved bookings. This information is securely sent to our payment provider and never stored by Common Venue.</p>
                <h5 class="site_select_category_title">Add Credit Card</h5>
                <p class="site_common_venue_text">Common Venue does not support prepaid or reloadable credit cards</p>

                <form action = "/payment" method = "POST">
                    {{csrf_field ()}} 
                    {{-- <div class="site_profile_box">
                        <div class="form-group">
                            <input type="email" class="form-control" id="" placeholder="Card Holder's Email">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="" placeholder="Card Number MM/YY CVV">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary site_btn btn-block mb-2">Submit</button>
                            <small class="site_credit_card_text">By clicking Submit, you agree to Common Venue's Services Agreement, which includes the Fees Overview and Community Guidelines.</small>
                        </div>
                    </div> --}}
                    <script 
                        src = " https://checkout.stripe.com/checkout.js " class = "stripe-button" 
                        data-key = "{{config ('services.stripe.key')}}" 
                        data-amount = " 1990 " 
                        data-name =" Purchase " 
                        data-description =" Proof of purchase " 
                        data-image =" https://stripe.com/img/documentation/checkout/marketplace.png " 
                        data-locale =" auto ">
                    </script>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
