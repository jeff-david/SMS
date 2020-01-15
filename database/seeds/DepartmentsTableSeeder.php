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
         array('department_name' => 'Aral-Pan'),
         array('department_name' => 'Filipino'),
         array( 'department_name' => 'Science'),
         array('department_name' => 'English'),
         array('department_name' => 'TVET'),
         array('department_name' => 'CLE'),
         array('department_name' => 'MAPEH'),
         array('department_name' => 'Math')
        )
        );

    }
}
