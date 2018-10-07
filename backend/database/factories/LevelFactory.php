<?php

use App\Models\Country;
use App\Models\Level\CategoryLevel;
use Faker\Generator as Faker;

$factory->define(App\Models\Level\Level::class, function (Faker $faker) {

    return [
        'name' => $faker->country,

        'country_id' => function () {
            return Country::all()->random();
        },
        'category_level_id' => function () {
            return CategoryLevel::all()->random();
        },

        'level_id' => null,
    ];
});
