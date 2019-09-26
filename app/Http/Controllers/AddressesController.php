<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Property;
use App\Http\Requests\Address\StoreRequest;
use App\Http\Requests\Address\UpdateRequest;

class AddressesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            if($request->params()) {
                $address = Address::create($request->params());

                return response()->json([
                    'success' => 'Address is successfuly created',
                    'address' => $address
                ]);
            }

            return view('properties.create', ['address' => $address]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Address $address)
    {
        try {
            $address->update($request->params());
            return redirect()->back();
            // return response()->json([
            //         'success' => 'Address is successfuly updated',
            //         'address' => $address
            // ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
