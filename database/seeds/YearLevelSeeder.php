<?php

use Illuminate\Database\Seeder;

class YearLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('year_levels')->insert(
            array(
                array('yearlevel' => 'Grade 7'),
                array('yearlevel' => 'Grade 8'),
                array( 'yearlevel' => 'Grade 9'),
                array('yearlevel' => 'Grade 10'),
                array('yearlevel' => 'Grade 11'),
                array('yearlevel' => 'Grade 12')
            )
            );
    }
}
