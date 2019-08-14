<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Review;
use App\Models\Property;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    
    $properties = Property::all();
    $property = $properties->Random(1)->first();

    $users = User::all();
    $user = $users->Random(1)->first();
    
    return [
        'text' => $faker->sentence(35),
        'parent_id' => $property->id,
        'user_id' => $user->id
    ];
});
