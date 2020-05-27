<?php

use Illuminate\Database\Seeder;

class GradeElevenSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade_eleven_subjects')->insert(
            array(
                array('semester' => 1,'year_level_id' => 5,'department_id' => 1,'subject_name' => 'Understanding Culture Society and Politics','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 5,'department_id' => 2,'subject_name' => 'Pagbasa at Pagsusuri ng ibat ibang teksto tungo sa pananaliksik','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 5,'department_id' => 3,'subject_name' => 'Earth and Life Science','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 5,'department_id' => 4,'subject_name' => 'Reading and Writing Skills','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 5,'department_id' => 5,'subject_name' => 'TVET','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 5,'department_id' => 6,'subject_name' => 'CLE 1','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 5,'department_id' => 8,'subject_name' => 'General Mathematics','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 5,'department_id' => 0,'subject_name' => 'RHGP','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 5,'department_id' => 1,'subject_name' => 'Entrepreneur','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 5,'department_id' => 2,'subject_name' => 'Filipino sa Piling Larangan','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 5,'department_id' => 3,'subject_name' => 'Physical Science','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 5,'department_id' => 4,'subject_name' => 'English for Academics and Profession Purposes','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 5,'department_id' => 5,'subject_name' => 'TVET','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 5,'department_id' => 6,'subject_name' => 'CLE 2','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 5,'department_id' => 8,'subject_name' => 'General Mathematics','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 5,'department_id' => 8,'subject_name' => 'Practical Research 1','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 5,'department_id' => 0,'subject_name' => 'RHGP','description' => 'sample'),
            )
        );
    }
}
