<?php

use Illuminate\Database\Seeder;

class PrincipalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('principals')->insert([
            'first_name' => 'Principal',
            'last_name' => 'principal',
            'middle_name' => 'principal',
            'username' => 'principal',
            'password' => bcrypt('principal')
         ]);
    }
}
