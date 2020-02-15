<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SMS\Models\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {

    $gender = $faker->randomElement(['male', 'female']);

    return [
        'cell_no' => $faker->e164PhoneNumber,
        'departments_id' => $faker->numberBetween(1,12),
        'lastname' => $faker->lastName,
        'firstname'=>$faker->firstName,
        'middlename'=>$faker->lastName,
        'gender' => $gender,
        'religion' =>'Roman Catholic',
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'street_address' =>$faker->streetAddress ,
        'city' =>$faker->city,
        'province' => $faker->streetName,
        'register_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_graduated' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'school_graduated' => $faker->catchPhrase,
        'username' => $faker->userName,
        'password' =>$faker->password,
        'age' => $faker->numberBetween(21,50),
        'section_id' => $faker->numberBetween(1,12),
        'handle_classes' => 0,
        'type_id'=> 2,
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),



        
    ];
});
