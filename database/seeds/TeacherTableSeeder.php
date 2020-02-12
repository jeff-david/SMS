<?php

use Illuminate\Database\Seeder;
use SMS\Models\Teacher;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 50;
        factory(Teacher::class, $count)->create();

        DB::table('teachers')->insert([
            'firstname' => 'Jeff David',
            'lastname' => 'Potrido',
            'middlename' => 'Hudar',
            'username' => 'jdpotrido',
            'password' => bcrypt('jdpotrido0714'),
            'departments_id' => 7,
            'register_date' => '1992-02-03',
            'gender' => 'Male',
            'birthdate' => '1992-10-23',
            'religion'=>'Roman Catholic',
            'age' => 24,
            'cell_no' => '09553204588',
            'street_address' => 'DaanLungsod,Oslob,Cebu',
            'city' => 'Cebu',
            'province' => 'Cebu City',
            'date_graduated' => '1992-10-23',
            'school_graduated' => 'USC',
            'handle_classes' => 0,
         ]);

    }
}
