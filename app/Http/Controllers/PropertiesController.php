<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Address;
use App\Models\User;
use App\Models\Amenity;
use App\Models\Review;
use Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Http\Requests\Property\StoreRequest;
use App\Http\Requests\Property\UpdateRequest;
use App\Http\Requests\Property\AddFavoriteRequest;

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

        return view('properties.index', ['properties' => $properties]);
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
            return redirect()->route('properties.show', [ 'id' => $property->id ]);
        } catch (\Exception $ex) {
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
        $reviews = Review::where('parent_id', $property->id)->limit(4)->get();
        $amenities = Amenity::all();

        foreach ($reviews as $review) {
            $user = User::where('id', $review->user_id)->first();

            if ($user) {
                return view('properties.single', ['property' => $property, 'reviews' => $reviews, 'user' => $user ,'amenities' => $amenities]);
            }
        }

        return view('properties.single', ['property' => $property, 'reviews' => $reviews]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $address = Address::where('id', $property->address_id)->first();

        return view('properties.edit', ['property' => $property, 'address' => $address]);
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
            return redirect()->route('properties.edit', $property->id);
        } catch (\Exception $ex) {
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

    public function favorites()
    {
        if (Auth::user()) {
            $properties = Property::whereHas('favorites', function ($q) {
                return $q->where('user_id', Auth::user()->id);
            })->orderByDesc('id')->get();

            return view('properties.favorites', compact('properties'));
        } else {
            return view('errors.404');
        }
    }

    public function toggleFavorite(Property $property, AddFavoriteRequest $request)
    {
        $data = [
            'user_id' => $request->user()->id,
        ];
        if (!$property->favorites()->exists()) {
            $property = $property->favorites()->create($data);

            return response()->json([
                'success' => 'Property liked',
            ]);
        } else {
            $property->favorites()->delete();

            return response()->json([
                'success' => 'Property disliked',
            ]);
        }
    }
}
