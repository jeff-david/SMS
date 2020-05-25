<?php

use Illuminate\Database\Seeder;
use SMS\Models\Section;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert(
            array(
                array('section_name' => 'Section A','description' => 'sample','from' => '95','to' =>'100','section_id' => '1','class_id' => '1','year_level_id' => '1'),
                array('section_name' => 'Section B','description' => 'sample','from' => '92','to' =>'94','section_id' => '1','class_id' => '1','year_level_id' => '1'),
                array( 'section_name' =>'Section C','description' => 'sample','from' => '89','to' =>'91','section_id' => '1','class_id' => '1','year_level_id' => '1'),
                array('section_name' => 'Section D','description' => 'sample','from' => '86','to' =>'88','section_id' => '1','class_id' => '1','year_level_id' => '1'),
                array('section_name' => 'Section E','description' => 'sample','from' => '83','to' =>'85','section_id' => '1','class_id' => '1','year_level_id' => '1'),
                array('section_name' => 'Section F','description' => 'sample','from' => '80','to' =>'82','section_id' => '1','class_id' => '1','year_level_id' => '1'),
                array('section_name' => 'Section G','description' => 'sample','from' => '79','to' =>'77','section_id' => '1','class_id' => '1','year_level_id' => '1'),
                array('section_name' => 'Section H','description' => 'sample','from' => '76','to' =>'78','section_id' => '1','class_id' => '1','year_level_id' => '1'),
                array('section_name' => 'Section I','description' => 'sample','from' => '73','to' =>'74','section_id' => '1','class_id' => '1','year_level_id' => '1'),
                array('section_name' => 'Section J','description' => 'sample','from' => '70','to' =>'72','section_id' => '1','class_id' => '1','year_level_id' => '1'),
            )
        );
       
    }
}
