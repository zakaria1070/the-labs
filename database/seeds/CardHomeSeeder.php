<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_homes')->insert([
            "logo" => "flaticon-023-flask",
            "titre" => "Get in the lab",
            "paraph" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,suscipit id nulla.."
        ]);

        DB::table('card_homes')->insert([
            "logo" => "flaticon-011-compass",
            "titre" => "Projects online",
            "paraph" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,suscipit id nulla.."
        ]);

        DB::table('card_homes')->insert([
            "logo" => "flaticon-037-idea",
            "titre" => "SMART MARKETING",
            "paraph" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,suscipit id nulla.."
        ]);
    }
}
