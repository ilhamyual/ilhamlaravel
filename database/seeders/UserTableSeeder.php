<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'ilham',
            'email' => 'ilham@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
