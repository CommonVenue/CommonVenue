<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Requests\Property\StoreRequest;
use App\Http\Requests\Property\UpdateRequest;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();

        return view('properties.index',['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            $property = Property::create($request->params());
            return redirect()->route('properties.show',[ 'id' => $property->id ]);
        } catch(\Exception $ex) { 
            return $ex->getMessage(); 
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return view('properties.single',['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $address = Address::where('id',$property->address_id)->first();

        return view('properties.edit',['property' => $property, 'address' => $address]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Property $property)
    {
        try {
            $property->update($request->params());
            return redirect()->route('properties.edit',$property->id);
        } catch(\Exception $ex) { 
            return $ex->getMessage(); 
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }

}
