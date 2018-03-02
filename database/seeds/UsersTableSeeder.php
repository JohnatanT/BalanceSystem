<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'Johnatan Tavares',
            'email' => 'johnatan12014@hotmail.com',
            'password' => bcrypt('123456'),
       ]);

       DB::table('users')->insert([
        'name' => 'Joao Tavares',
        'email' => 'joao@hotmail.com',
        'password' => bcrypt('123456'),
        ]);

    }
}
