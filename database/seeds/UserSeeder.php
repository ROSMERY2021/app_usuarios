<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nathaly Zelaya',
            'email' => 'Nathaly123@gmail.com',
            'password' => bcrypt('nathaly123'),
            'profession_id' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Jason Zelaya',
            'email' => 'jasonZelaya@gmail.com',
            'password' => bcrypt('jason2017'),
            'profession_id' => '1'
        ]);
    }
}
