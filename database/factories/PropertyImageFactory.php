<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PropertyImage;
use App\Models\Property;
use Faker\Generator as Faker;

$factory->define(PropertyImage::class, function (Faker $faker) {
    return [
        'url' => $faker->image('public/storage/images', 400, 300, null, false),
    ];
});
