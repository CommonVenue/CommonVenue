<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\UserProfile\StoreRequest;
use App\Http\Requests\UserProfile\UpdateRequest;

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

        return view('profile.index',['profile' => $profile]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserProfile\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $profile = Profile::where('user_id',auth()->id())->first();

        if (isset($profile)) {
            return view('profile.index',['profile' => $profile]);
        }
        $createProfile = Profile::create($request->params());

        return view('profile.index',['profile' => $createProfile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserProfile\UpdateRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request)
    {
        $profile = Profile::where('user_id',auth()->id())->first();
        $profile->update($request->params());

        return redirect(route('profile'));
    }

}
