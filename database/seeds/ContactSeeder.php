<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'paraf' => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. ",
            'titre' => 'Main Office',
            'adresse' =>'Libertad, 34',
            'adresse2' =>'05200 Arévalo ',
            'phone' =>'0034 37483 2445 322 ',
            'email' =>'hello@company.com',
            'bouton' =>'Browse',
            'url' =>'/',
        ]);
    }
}
