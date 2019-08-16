@extends('layouts.master')

@section('content')
<div class = "content"> 
{{--     <h1> Trial Purchase </h1> 
    <h3> US $ 19.99 </h3> 
    <form action = "/process-subscription" method="POST"> 
        {{csrf_field ()}} 
        <script 
            src = " https://checkout.stripe.com/checkout.js " class = "stripe-button" 
            data-key = "{{config ('services.stripe.key')}}" 
            data-amount = " 1990 " 
            data-name =" Purchase " 
            data-description =" Proof of purchase " 
            data-image =" https://stripe.com/img/documentation/checkout/marketplace.png " 
            data-locale =" auto ">
        </script> 
    </form>  --}}
    <table> 
        @foreach ($invoices as $invoice) 
            <tr> 
                <td> {{$invoice->date()->toFormattedDateString()}} </td> 
                <td> {{$invoice->total()}} </td> 
                <td> <a href="/invoice/{{ $invoice->id }}"> Download </a></td> 
            </tr> 
        @endforeach
     </table> 
</div>
   {{-- <div class = "content"> 
    <h1> Trial Purchase </h1> 
    <h3> US $ 19.99 </h3> 
    <form action = "/process-subscription" method="POST"> 
        {{csrf_field ()}} 
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
</div> --}}
@endsection
