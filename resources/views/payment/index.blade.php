@extends('welcome')
 
@section('content')
    @if(session()->has('success'))
        <br>
        <div class="alert alert-success">{{ session()->get('success') }} </div>
    @endif
    <form action="{{ route('post:make:payment') }}" method="post" id="form">
        {{ csrf_field() }}
        <h5>Pay with Stripe</h5>
        <button type="button" class="btn button btn-primary margin-top-30 margin-bottom-30 stripe-btn">Pay With Stripe</button>
    </form>
@stop
 
@section('page-js')
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script>
        $(function() {
            var handler = StripeCheckout.configure({
                key: '{{ config('services.stripe.key') }}',
                locale: 'en',
                name: 'stripe-demo',
                description: 'Stripe Demo'
            });
            // Close Checkout on page navigation:
            $(window).on('popstate', function () {
                handler.close();
            });
            function makeStripeForm($form, currency, amount) {
                $form.find('.stripe-btn').on('click', function (e) {
                    handler.open({
                        currency: currency,
                        amount: amount,
                        token: function (token) {
                            $form.append('<input name="stripe_token" type="hidden" value="' + token.id + '"/>');
                            $form.submit();
                        }
                    });
                    e.preventDefault();
                });
            }
            makeStripeForm($('#form'), "USD", '1000' );
        });
    </script>
@stop