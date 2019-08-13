<?php

use Illuminate\Database\Seeder;
use App\Models\ComingSoonCity;

class CominSoonCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (ComingSoonCity::count() == 0) {

        	ComingSoonCity::insert([
	            'name' => 'Vancouver',
	            'subtitle' => 'Coming Soon'
	        ]);
	        ComingSoonCity::insert([
	            'name' => 'Montreal',
	            'subtitle' => 'Coming Soon'
	        ]);
	        ComingSoonCity::insert([
	            'name' => 'Calgary',
	            'subtitle' => 'Coming Soon'
	        ]);
	    }
    }
}
