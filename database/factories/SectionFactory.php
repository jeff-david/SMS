<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SMS\Models\Section;
use Faker\Generator as Faker;

$factory->define(Section::class, function (Faker $faker) {

    // $sections = $faker->randomElement(['Section A', 'Section B','Section C','Section D','Section E','Section F','Section G','Section H','Section I','Section J','Section K','Section L']);
    // return [
    //     'year_level_id' => $faker->numberBetween(1,6),
    //     'section_name' => $sections,
    //     'class_id' => $faker->numberBetween(1,6),
    //     'section_id' => $faker->numberBetween(1,6),
    //     'description' => $faker->text($maxNbChars = 100) 
    // ];
});
