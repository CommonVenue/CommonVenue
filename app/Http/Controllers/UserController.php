<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\UserProfile\StoreRequest;
use App\Http\Requests\UserProfile\UpdateRequest;
use Illuminate\Http\Request;
use Auth;


class UserController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::where('user_id',auth()->id())->first();

        if($profile) {
            return view('profile.index',['profile' => $profile]);
        }
        
        return view('profile.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $profile = Profile::create($request->params());

        return $profile;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        // return view('profile.index',['profile' => $profile]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request)
    {
        $profile = Profile::where('user_id',auth()->id())->first();
        $profile->update($request->params());

        return redirect(route('profile'));
    }

}
