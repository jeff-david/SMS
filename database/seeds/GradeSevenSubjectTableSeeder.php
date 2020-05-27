<?php

use Illuminate\Database\Seeder;

class GradeSevenSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade_seven_subjects')->insert(
            array(
                array('year_level_id' => 1,'department_id' => 1,'subject_name' => 'Aral_Pan','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 2,'subject_name' => 'Filipino','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 3,'subject_name' => 'Science','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 4,'subject_name' => 'English','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 5,'subject_name' => 'TVET','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 6,'subject_name' => 'CLE','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 7,'subject_name' => 'Music','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 7,'subject_name' => 'Arts','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 7,'subject_name' => 'PE','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 7,'subject_name' => 'Health','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 8,'subject_name' => 'Math','description' => 'sample'),
                array('year_level_id' => 1,'department_id' => 0,'subject_name' => 'RHGP','description' => 'sample'),
            )
        );
    }
}
