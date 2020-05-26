<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(
            array(
                array('department_name' => 'Aral-Pan','description' => 'sample'),
                array('department_name' => 'Filipino','description' => 'sample'),
                array('department_name' => 'Science','description' => 'sample'),
                array('department_name' => 'English','description' => 'sample'),
                array('department_name' => 'TVET','description' => 'sample'),
                array('department_name' => 'CLE','description' => 'sample'),
                array('department_name' => 'MAPEH','description' => 'sample'),
                array('department_name' => 'MATH','description' => 'sample'),
            )
        );

    }
}
