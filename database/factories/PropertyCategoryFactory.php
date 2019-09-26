<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\PropertyCategory;
use Faker\Generator as Faker;

$factory->define(PropertyCategory::class, function (Faker $faker) {

    $categories = Category::all();
    $category = $categories->Random(1)->first();

    return [
        'name' => $category->name,
        'category_id' => $category->id
    ];
});
