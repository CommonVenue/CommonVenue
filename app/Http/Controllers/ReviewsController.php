<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Property;
use App\Models\User;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Property $property)
    {
        $reviews = Review::where('parent_id', $property->id)->get();

        foreach ($reviews as $review) {
            $user = User::where('id', $review->user_id)->first();
            if ($user) {
                return view('reviews.index', [
                  'reviews' => $reviews,
                  'user' => $user
                ]);
            }
        }


        return view('reviews.index', ['reviews' => $reviews]);
    }
}
