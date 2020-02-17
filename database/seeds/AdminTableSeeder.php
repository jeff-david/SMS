<?php

use Illuminate\Database\Seeder;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
     DB::table('admins')->insert([
        'first_name' => 'Administrator',
        'last_name' => 'admin',
        'middle_name' => 'admin',
        'username' => 'admin',
        'contact_number' => '09302664420',
        'address' => 'Oslob,Cebu',
        'type_id'=> 4,
        'user_id'=> 1,
        'password' => bcrypt('admin')
     ]);
    }
}
