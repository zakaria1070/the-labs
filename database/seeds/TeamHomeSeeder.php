<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_homes')->insert([
            'image' =>"img/team/1.jpg",
            'nom' =>"Christinne Williams",
            'post' =>"Project Manager",
        ]);

        DB::table('team_homes')->insert([
            'image' =>"img/team/2.jpg",
            'nom' =>"Christinne Williams",
            'post' =>"Project Manager",
        ]);

        DB::table('team_homes')->insert([
            'image' =>"img/team/3.jpg",
            'nom' =>"Christinne Williams",
            'post' =>"Project Manager",
        ]);
    }
}
