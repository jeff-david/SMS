<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SMS\Models\Grades;
use Faker\Generator as Faker;

$factory->define(Grades::class, function (Faker $faker) {

    $id = $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]);

    return [
        'subject_id' =>$id,
        'teacher_id' =>$faker->numberBetween(1,50),
        'class_id' => $faker->numberBetween(1,6),
        'user_id' => $faker->numberBetween(1,250),
        'first_grading' => $faker->numberBetween(75,99),
        'second_grading' => $faker->numberBetween(75,99),
        'third_grading' => $faker->numberBetween(75,99),
        'fourth_grading' => $faker->numberBetween(75,99),
        

    ];
});
