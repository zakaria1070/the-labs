<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nav_logos')->insert([
            'logo' => '/img/logo.png',
            'url' => '/'
        ]);
    }
}
