<?php

use App\Models\Institution\CategoryInstitution;
use Faker\Generator as Faker;

$factory->define(App\Models\Institution\Institution::class, function (Faker $faker) {
    return [
        'category_institution_id' => function () {
            return CategoryInstitution::all()->random();
        },
        'name'=> $faker->company,
        'image'=> $faker->imageUrl(),
        'acronym'=> $faker->companySuffix,
        'description'=> $faker->text,
        'foundation_year'=> $faker->year,
        'country_seat'=> $faker->country,
        'areas_intervention'=> $faker->domainWord,
        'target_beneficiary'=> $faker->company,
        'web_site'=> $faker->url,
        'email'=> $faker->companyEmail,
        'number_phone'=> $faker->phoneNumber,
        'address'=> $faker->address
    ];;
});
