<?php

use Illuminate\Database\Seeder;
use SMS\Models\Teacher;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 50;
        factory(Teacher::class, $count)->create();
    }
}
