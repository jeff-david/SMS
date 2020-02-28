<?php

use Illuminate\Database\Seeder;
use SMS\Models\Grades;
class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 16500;
        factory(Grades::class, $count)->create();
    }
}
