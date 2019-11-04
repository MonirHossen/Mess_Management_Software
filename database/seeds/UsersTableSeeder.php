<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Monir Hossen',
            'email' => 'monirhossen@gmail.com',
            'phone' => '01865512325',
            'password' => bcrypt(123456),
        ]);
    }
}
