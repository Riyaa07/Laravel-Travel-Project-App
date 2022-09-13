<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Place;
use App\Country;

use Faker\Generator as Faker;

$factory->define(Place::class, function (Faker $faker) {
    $CountryIds =App\User::pluck('id')->all();;
    return [
        //
        'place_name' => $faker->sentence,
        'description' => $faker->sentence,
        'category' => $faker->sentence,
        'top_attractions' => $faker->sentence,
        'things_to_do' => $faker->sentence,
        'days' => $faker->numberBetween(2,6),
        'country_id' => $faker->randomElement($CountryIds),
    ];
});
