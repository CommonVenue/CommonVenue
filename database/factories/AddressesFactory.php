<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'country' => $faker->country,
        'state' => $faker->state,
        'city' => $faker->city,
        'postal_code' => $faker->randomNumber(5),
        'street_1' => $faker->address,
        'street_2' => $faker->address,
    ];
});
