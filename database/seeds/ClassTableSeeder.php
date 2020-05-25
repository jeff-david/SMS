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
                array('class_name' => '26 Batch','description' => 'sample','from' => '2020','to' =>'2025'),
                
            )
        );
    }
}
