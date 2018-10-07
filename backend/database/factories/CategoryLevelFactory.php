<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Level\CategoryLevel::class, function (Faker $faker) {
    return [
        'name' => function () {
            return collect([
                'Municipalité',
                'Distrist',
                'Régions',
                'Provinces',
                'Communes'
            ])->random();
        },
    ];
});
