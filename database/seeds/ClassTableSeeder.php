<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert(
            array(
                array('class_name' => '26 Batch','description' => 'sample'),
                array('class_name' => '27 Batch','description' => 'sample'),
                array( 'class_name' => '28 Batch','description' => 'sample'),
                array('class_name' => '29 Batch','description' => 'sample'),
                array('class_name' => '30 Batch','description' => 'sample'),
                array('class_name' => '31 Batch','description' => 'sample'),
            )
        );
    }
}
