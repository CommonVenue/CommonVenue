<?php

namespace App\Http\Controllers;

use App\Models\ComingSoonCity;
use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComingSoonCity  $comingSoonCity
     * @return \Illuminate\Http\Response
     */
    public function show($comingSoonCity)
    {
        return view("coming-soon.$comingSoonCity");
    }
}
