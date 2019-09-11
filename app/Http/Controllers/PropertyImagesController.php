<?php

namespace App\Http\Controllers;

use App\Models\PropertyImage;
use Illuminate\Http\Request;
use App\Http\Requests\PropertyImages\StoreRequest;
use App\Http\Requests\PropertyImages\UpdateRequest;

class PropertyImagesController extends Controller
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
            foreach ($request->params() as $image) {
                $propertyImage = PropertyImage::create($image);
            }

            return response()->json([
                'success' => 'Property Images are successfuly uploaded',
                'image' => $propertyImage
            ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyImage  $propertyImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, PropertyImage $propertyImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyImage  $propertyImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyImage $propertyImage)
    {
        //
    }
}
