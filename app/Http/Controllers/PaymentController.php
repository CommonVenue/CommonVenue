<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Models\User;
use Auth;

class PaymentController extends Controller
{
    public function payWithStripe()
    {
        return view('payment.index');
    }

    public function payment(Request $request)
    {
        try {
            $stripeSecret = Stripe::setApiKey('sk_test_EyPHobPO1Q0avvf51K0ugfIp00GOvMgQQA');
            $token = $request->get('stripeToken');

            $customer = Customer::create([
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ]);
            // dd($request->all());
            $charge = Charge::create([
                'customer' => $customer->id,
                'amount' => 1*1000,
                'currency' => 'usd',
                'description' => 'Example charge',
                // 'source' => $token,
            ]);

            /*// Create a Transfer to a connected account (later):
            $transfer = \Stripe\Transfer::create([
              "amount" => 7000,
              "currency" => "USD",
              "destination" => "{CONNECTED_STRIPE_ACCOUNT_ID}",
              "transfer_group" => "{ORDER10}",
            ]);*/

            session()->flash('success', 'Payment Successful');
            // return redirect()->route('make:payment');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }


    public function subscription()
    {
        return view('payment.subscription');
    }

    public function process_subscription(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $user = Auth::user();
            $user->newSubscription('main', 'gold-plan')->create($request->stripeToken);

            return 'Subscription successful! You just subscribed to the Gold Plan';
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function cancel_subscription(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $user = Auth::user();
            $user->subscription('main')->cancel();

            return 'Subscription successfully canceled!';
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function invoices()
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $user = Auth::user();
            $invoices = $user->invoices();
            return view('payment.invoice', compact('invoices'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function invoice($invoice_id)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $user = Auth::user();

            return $user->downloadInvoice($invoice_id, [
                'vendor' => 'Your Company',
                'product' => 'Your Product',
            ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
