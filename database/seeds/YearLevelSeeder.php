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
                array('yearlevel' => 'Grade 7','color'=> '#00b26f'),
                array('yearlevel' => 'Grade 8','color'=> '#cccc00'),
                array( 'yearlevel' => 'Grade 9','color'=> '#fa4251'),
                array('yearlevel' => 'Grade 10','color'=> '#00b5e9'),
                array('yearlevel' => 'Grade 11','color'=> '##bf80ff'),
                array('yearlevel' => 'Grade 12','color'=> '#ff8300')
            )
            );
    }
}
