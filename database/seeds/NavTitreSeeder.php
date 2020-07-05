<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nav_titres')-> insert([
            "title" => "home",
            "url" => "/"
        ]);

        DB::table('nav_titres')-> insert([
            "title" => "services",
            "url" => "/services"
        ]);

        DB::table('nav_titres')-> insert([
            "title" => "blog",
            "url" => "/blog"
        ]);

        DB::table('nav_titres')-> insert([
            "title" => "contact",
            "url" => "/contact"
        ]);

        DB::table('nav_titres')-> insert([
            "title" => "element",
            "url" => "/element"
        ]);
    }
}
