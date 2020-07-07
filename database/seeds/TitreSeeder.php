<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            'titre1' => "Get in (the Lab) and discover the world",
            'titre2' => "WHAT OUR CLIENTS SAY",
            'titre3' => "Get in (the Lab) and see the services",
            'titre4' => "Get in (the Lab) and meet the team",
            'titre5' => "Are you ready to stand out?",
            'titre6' => "CONTACT US",
        ]);
    }
}
