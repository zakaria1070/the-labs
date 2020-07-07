<?php

use App\Http\Controllers\CardHomeController;
use App\TestimonialHome;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(NavTitreSeeder::class);
        $this->call(NavLogoSeeder::class);
        $this->call(CardHomeSeeder::class);
        $this->call(AboutHomeSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(TestiSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TeamHomeSeeder::class);
        $this->call(PromotionHomeSeeder::class);
    
    
    }
}
