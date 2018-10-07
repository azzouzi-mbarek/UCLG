<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Person\Person::class, function (Faker $faker) {
    return array(
        'image'=>$faker->imageUrl($width = 640, $height = 480),
        'sex'=>$faker->title($gender = 'male'|'female'),
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'birthday'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'nationality'=>$faker->country,
        'academic_level'=>'bac+..',
        'study_area'=>$faker->jobTitle,
        'short_biography'=>$faker->text,
        'email'=>$faker->email,
        'number_phone'=>$faker->phoneNumber,
    );
});
