<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\Subscribe\StoreRequest;


class SubscribersController extends Controller
{
    /**
     * Store a contact request.
     *
     * @param \App\Http\Requests\Subscriber\StoreRequest $request
     * @param \App\Models\Subscriber $subscriber
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreRequest $request, Subscriber $subscriber)
    {
        $subscriber->fill($request->all())->save();
        return redirect()->route('welcome');
    }
}
