<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Requests\Booking\StoreRequest;
use App\Http\Requests\Booking\UpdateRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with('property')->where('user_id', auth()->id())->get();

        return view('booking.index', [ 'bookings' => $bookings ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function property_bookings(Property $property)
    {
        $bookings = Booking::where('property_id', $property->id)->get();
        return view('booking.property-bookings', [ 'bookings' => $bookings ,'property' => $property]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Property $property)
    {
        $booking = Booking::where('property_id', $property->id)->get();
        
        return view('booking.create', [ 'booking' => $booking ,'property' => $property ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Property $property)
    {
        try {
            $booking = Booking::create($request->params());
            return redirect()->route('bookings');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property, Booking $booking)
    {
        return view('booking.show', [ 'booking' => $booking ,'property' => $property ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property, Booking $booking)
    {
        return view('booking.edit', [ 'booking' => $booking ,'property' => $property ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Property $property, Booking $booking)
    {
        try {
            $booking->update($request->params());
            return view('booking.show', [ 'booking' => $booking ,'property' => $property ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
