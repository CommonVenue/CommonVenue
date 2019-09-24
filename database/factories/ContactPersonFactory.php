<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactPerson;
use Faker\Generator as Faker;

$factory->define(ContactPerson::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'contact_number' => $faker->randomNumber(8),
        'image' => $faker->image('public/storage/images', 400, 300, null, false),
    ];
});
