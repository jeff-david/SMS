<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SMS\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {

    $relation = $faker->randomElement(['Father', 'Mother']);

    return [
        'LRN' => $faker->unique()->numberBetween(100,200),
        'cell_1' => $faker->e164PhoneNumber,
        'year_level_id' => $faker->numberBetween(1,6),
        'lastname' => $faker->lastName,
        'firstname'=>$faker->firstName,
        'middlename'=>$faker->lastName,
        'guardian_lastname' => $faker->lastName,
        'guardian_firstname'=>$faker->firstName,
        'guardian_middlename'=>$faker->lastName,
        'mother_name'=>$faker->firstName,
        'mother_occupation'=>$faker->jobTitle,
        'father_name'=>$faker->firstName,
        'father_occupation'=>$faker->jobTitle,
        'gender' => 'Male',
        'religion' =>'Roman Catholic',
        'rel_student' => $relation,
        'current_res' => $faker->streetAddress,
        'guardian_rel' => 'Roman Catholic',
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'street_address' =>$faker->streetAddress ,
        'city' =>$faker->city,
        'province' => $faker->streetName,
        'register_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'username' => $faker->userName,
        'password' =>$faker->password,
        'mother_tounge' => 'Pilipino',
        'dialects' => 'Bisaya',
        'ethnicities'=> 'Pilipino',
        'type_id'=> 1,
        'section_id' => $faker->numberBetween(1,12),
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
