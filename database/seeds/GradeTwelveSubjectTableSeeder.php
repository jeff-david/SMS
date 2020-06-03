<?php

use Illuminate\Database\Seeder;

class GradeTwelveSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade_twelve_subjects')->insert(
            array(
                array('semester' => 1,'year_level_id' => 6,'department_id' => 1,'subject_name' => 'Practical Research 2','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 6,'department_id' => 2,'subject_name' => 'Media Information and Literacy','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 6,'department_id' => 3,'subject_name' => 'Financial Management','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 6,'department_id' => 4,'subject_name' => 'Reading and Writing Skills','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 6,'department_id' => 5,'subject_name' => 'TVET','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 6,'department_id' => 6,'subject_name' => 'CLE ','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 6,'department_id' => 8,'subject_name' => 'Pagbasa at Pagsusuri ng ibat ibang teksto tungo sa pananaliksik','description' => 'sample'),
                array('semester' => 1,'year_level_id' => 6,'department_id' => 0,'subject_name' => 'RHGP','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 6,'department_id' => 1,'subject_name' => 'Work Immersion','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 6,'department_id' => 2,'subject_name' => 'Media and Information Literacy','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 6,'department_id' => 3,'subject_name' => 'Physical Science','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 6,'department_id' => 4,'subject_name' => 'Oral Communication','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 6,'department_id' => 5,'subject_name' => 'TVET','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 6,'department_id' => 6,'subject_name' => 'CLE ','description' => 'sample'),
                array('semester' => 2,'year_level_id' => 6,'department_id' => 0,'subject_name' => 'RHGP','description' => 'sample'),
            )
        );
    }
}
