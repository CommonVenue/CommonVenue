<?php

namespace App\Http\Controllers;

use App\Models\ContactPerson;
use Illuminate\Http\Request;
use App\Http\Requests\ContactPersons\StoreRequest;

class ContactPersonsController extends Controller
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
            $contactPerson = ContactPerson::create($request->params());

            return response()->json([
                'success' => 'Person is successfuly created',
                'person' => $contactPerson
            ]);
            
            // return redirect()->route('properties.show', [ 'id' => $property->id ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactPerson  $contactPerson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactPerson $contactPerson)
    {
        //
    }
}
