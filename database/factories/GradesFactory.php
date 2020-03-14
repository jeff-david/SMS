<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SMS\Models\Grades;
use Faker\Generator as Faker;

$factory->define(Grades::class, function (Faker $faker) {
    return [
        'subject_id' =>$faker->numberBetween(1,11),
        'teacher_id' =>$faker->numberBetween(1,50),
        'class_id' => $faker->numberBetween(1,6),
        'user_id' => $faker->numberBetween(1,250),
        'first_grading' => $faker->numberBetween(75,99),
        'second_grading' => $faker->numberBetween(75,99),
        'third_grading' => $faker->numberBetween(75,99),
        'fourth_grading' => $faker->numberBetween(75,99),
        'year_level_id' => $faker->numberBetween(1,6),
        

    ];
});
