<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $artists = array();

        $name=array('A','B','C','D','E');
        $gen = array('M','F','M','F','M');
        for($i = 0;$i < 100; $i++)
        {
            array_push($artists,(array)[
                'artistName' => $name[$i % 5],
                'musicName' => Str::random(10),//This is random string
                'duration' => rand(10,12),
                'genre' => $gen[$i % 5],
                'year' => rand(2018,2020)
            ]);
        }


        DB::table('artist')->insert($artists);
    }
}
