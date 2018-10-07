<?php

use App\Models\Level\Level;
use App\Models\Person\CategoryPerson;
use App\Models\Person\LevelPerson;
use App\Models\Person\Person;
use Faker\Generator as Faker;

$factory->define(LevelPerson::class, function (Faker $faker) {
    return [
        'person_id' => function () {
            return Person::all()->random();
        },
        'level_id' => function () {
            return Level::all()->random();
        },
        'category_person_id' => function () {
            return CategoryPerson::all()->random();
        },
    ];
});
