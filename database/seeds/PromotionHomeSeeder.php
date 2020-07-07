<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotion_homes')->insert([
            'titre'=>"Are you ready to stand out?",
            'paraf'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            'bouton'=>"Browse",
        ]);
    }
}
