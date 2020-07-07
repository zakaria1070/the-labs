<?php

use Illuminate\Database\Seeder;

class TestiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testis')->insert([
            'paraf'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'nom' => 'Michael Smith',
        'entreprise' => 'CEO Company',
        'image' => 'img/avatar/01.jpg'
        ]);

        DB::table('testis')->insert([
            'paraf'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'nom' => 'Michael Smith',
        'entreprise' => 'CEO Company',
        'image' => 'img/avatar/02.jpg'
        ]);

        DB::table('testis')->insert([
            'paraf'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'nom' => 'Michael Smith',
        'entreprise' => 'CEO Company',
        'image' => 'img/avatar/01.jpg'
        ]);

        DB::table('testis')->insert([
            'paraf'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
        'nom' => 'Michael Smith',
        'entreprise' => 'CEO Company',
        'image' => 'img/avatar/02.jpg'
        ]);
    }
}
