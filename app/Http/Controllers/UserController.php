<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $profile = User::where('id', auth()->id())->first();

        return view('profile.index', ['profile' => $profile]);
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
        $profile = User::where('id', auth()->id())->first();

        $profile->update($request->params());

        return view('profile.index', ['profile' => $profile]);
    }
}
