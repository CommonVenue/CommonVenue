<?php

namespace App\Http\Controllers;

use App\Models\PropertyCategory;
use Illuminate\Http\Request;

class PropertyCategoriesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = $request->all();
        try {
            foreach ($categories['data'] as $category) {
                $propertyCategory = PropertyCategory::create($category);
            }
            return response()->json([
                'success' => 'Property\'s categories are successfuly created',
                'property category' => $propertyCategory
            ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, PropertyCategory $propertyCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyCategory $propertyCategory)
    {
        //
    }
}
