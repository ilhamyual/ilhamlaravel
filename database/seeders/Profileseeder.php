<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Profileseeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Profile')->insert([
            'address' => 'bondowoso',
            'no_tlp' => '089610349790',
            'ttl' => '2000-09-28',
            'foto' => 'picture.png',
        ]);
    }
}
