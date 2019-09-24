@extends('layouts.master')

@section('content')
<section class="site_section_wrapper bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h1 class="site_page_title">Payments</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 site_mobile_text_center">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="site_select_category_title mb-0">Credit Card</h4>
                    </div>
                </div>
                <hr class="mb-4">
                <p class="mb-5 site_common_venue_text">
                    Adding a credit card allows Common Venue to charge you for reserved bookings. This information is securely sent to our payment provider and never stored by Common Venue.
                </p>
                <h5 class="site_select_category_title">
                    Add Credit Card
                </h5>
                <p class="site_common_venue_text">
                    Common Venue does not support prepaid or reloadable credit cards
                </p>
                <div class="row mb-8">
                    <div class="col-lg-12">
                        <form  id="payment-form">
                            @csrf
                            <div class="site_profile_box">
                                <div class="form-group">
                                    <input type="hidden" name="stripeToken">
                                    <input type="email" class="form-control" name="email" placeholder="Card Holder's Email">
                                </div>
                                <div class="form stripe_box">
                                    <label for="card-element">
                                        Credit or debit card
                                    </label>
                                    <div id="card-element"></div>
                                    <div id="card-errors" role="alert"></div>
                                    <button form="payment-form" id="payment_button" class="btn btn-primary site_btn btn-block mb-2" style="margin-top: 15px">
                                        Submit Payment
                                    </button>
                                </div>
                                <div class="form-group text-center">
                                    <small class="site_credit_card_text">By clicking Submit, you agree to Common Venue's Services Agreement, which includes the Fees Overview and Community Guidelines.</small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    /*
    * Stripe
    */
    var stripe = Stripe('pk_test_JMDrvC6Lqvpr14EJBDEF4G5R00VHfsHL8l');
    var elements = stripe.elements();

    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    var card = elements.create('card', {style: style});
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    $(card).change(function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    })

    // Handle form submission.
    $('#payment-form').submit(function(e) {
        event.preventDefault();
        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                let token = stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        console.log(token)
      // Insert the token ID into the form so it gets submitted to the server
      var form = $('#payment-form');
      let stipe_token = $('input[name=stripeToken]').attr('value', token.id);

      let stripeId = token.card.id;
      let expMonth = token.card.exp_month;
      let expYear = token.card.exp_year;
      let last4 = token.card.last4;
      let userId = {{ auth()->id() }}

      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "/payment",
        dataType: "JSON",
        data:{
            stripeToken:stipe_token.val(),
            stripe_id:stripeId,
            exp_month:expMonth,
            exp_year:expYear,
            last4:last4,
            user_id:userId,
            customer_id:'',
        },
        success: function(res) {
            window.location.href = '/home';
        },
        error: function(error) {    }
      });

    }

</script>
@endsection
