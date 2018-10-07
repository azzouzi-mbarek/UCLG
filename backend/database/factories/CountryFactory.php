<?php

use App\Models\Region;
use Faker\Generator as Faker;

$factory->define(App\Models\Country::class, function (Faker $faker) {
    return [
        'region_id' => function(){
            return Region::all()->random();
        },
        'name' => $faker->city,
    ];
});
