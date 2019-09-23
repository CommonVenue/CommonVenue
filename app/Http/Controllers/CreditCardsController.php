<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class CreditCardsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $stripeSecret = Stripe::setApiKey('sk_test_EyPHobPO1Q0avvf51K0ugfIp00GOvMgQQA');
            $token = $request->get('stripeToken');
            $request->stripeEmail = auth()->user()->email;

            $customer = Customer::create([
                'email' => $request->stripeEmail,
                'source' => $token
            ]);

            $charge = Charge::create([
                'customer' => $customer->id,
                'amount' => 1*$request->amount,
                'currency' => 'usd',
                'description' => 'Example charge',
            ]);
            
            $data = $request->all();
            $data['customer_id'] = $customer->id;

            $craditCard = CreditCard::create($data);

            return response()->json([
                'success' => 'Success!',
                'cradit card' => $craditCard
            ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function charge(Request $request)
    {
        $stripeSecret = Stripe::setApiKey('sk_test_EyPHobPO1Q0avvf51K0ugfIp00GOvMgQQA');
        $craditCard = CreditCard::where('user_id',auth()->id())->first();
        $customer = Customer::retrieve($craditCard->customer_id);

        try {
            $charge = Charge::create([
                'customer' => $customer->id,
                'amount' => 1*$request->amount,
                'currency' => 'usd',
                'source' => $request->card_id,
            ]);

            return response()->json([
                'success' => 'Success! Amount is charged',
                'charge' => $charge
            ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreditCard  $creditCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreditCard $creditCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreditCard  $creditCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreditCard $creditCard)
    {
        //
    }
}
