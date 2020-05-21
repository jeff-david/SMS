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
                array('class_name' => '26 Batch','description' => 'sample','from' => '2015','to' =>'2019'),
                array('class_name' => '27 Batch','description' => 'sample','from' => '2016','to' =>'2020' ),
                array( 'class_name' =>'28 Batch','description' => 'sample','from' => '2017','to' =>'2021'),
                array('class_name' => '29 Batch','description' => 'sample','from' => '2018','to' =>'2022'),
                array('class_name' => '30 Batch','description' => 'sample','from' => '2019','to' =>'2023'),
                array('class_name' => '31 Batch','description' => 'sample','from' => '2020','to' =>'2024'),
            )
        );
    }
}
