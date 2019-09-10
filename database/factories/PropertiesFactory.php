<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Property;
use App\Models\Address;
use App\Models\Category;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
    $addresses = Address::all();
    $address = $addresses->Random(1)->first();

    $users = User::all();
    $user = $users->Random(1)->first();

    $categories = Category::all();
    $category = $categories->Random(1)->first();
    
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(25),
        'image' => $faker->image('public/images', 400, 300, null, false),
        'price' => $faker->numberBetween(10,100),
        'status' => $faker->randomElement(['active' ,'inactive']),
        'address_id' => $address->id,
        'owner_id' => $user->id,
        'category_id' => $category->id,
        'adult' => $faker->boolean,
        'wifi_name' => $faker->sentence(2),
        'wifi_password' => $faker->sentence(1),
        'location_description' => $faker->sentence(25),
        'location_description' => $faker->boolean,
        'min_hours' => $faker->numberBetween(1,24),
        'cleaning_fee' => $faker->numberBetween(0,25),
        'capacity' => $faker->numberBetween(0,10),
    ];
});