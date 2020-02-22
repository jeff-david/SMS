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
        $count = 72;
        factory(Section::class, $count)->create();
       
    }
}
