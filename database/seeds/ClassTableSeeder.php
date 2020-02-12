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
                array('class_name' => '26 Batch'),
                array('class_name' => '27 Batch'),
                array( 'class_name' => '28 Batch'),
                array('class_name' => '29 Batch'),
                array('class_name' => '30 Batch'),
                array('class_name' => '31 Batch'),
            )
        );
    }
}
