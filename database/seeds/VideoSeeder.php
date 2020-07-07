<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'lien' => 'https://www.youtube.com/watch?v=j9KKh215HTs&list=RDuUXZPCHPgfo&index=6'
        ]);
    }
}
