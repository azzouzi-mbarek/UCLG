<?php

use App\Models\Country;
use App\Models\Person\CategoryPerson;
use App\Models\Person\CountryPerson;
use App\Models\Person\Person;
use Faker\Generator as Faker;

$factory->define(CountryPerson::class, function (Faker $faker) {
    return [
        'person_id' => function () {
            return Person::all()->random();
        },
        'country_id' => function () {
            return Country::all()->random();
        },
        'category_person_id' => function () {
            return CategoryPerson::all()->random();
        },
    ];
});
