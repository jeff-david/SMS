<?php

use Illuminate\Database\Seeder;
use SMS\Models\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 50;
        factory(Student::class, $count)->create();

      
    }
}
