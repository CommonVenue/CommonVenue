<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Category::count() == 0) {

        	Category::insert([
	            'name' => 'Bars',
	            'image' => '/MaskGroup4.png'
	        ]);

        	Category::insert([
	            'name' => 'Birthday Parties',
	            'image' => '/MaskGroup6.png'
	        ]);

        	Category::insert([
	            'name' => 'Photoshoots',
	            'image' => '/MaskGroup7.png'
	        ]);

        	Category::insert([
	            'name' => 'Workshop',
	            'image' => '/MaskGroup8.png'
	        ]);

        	Category::insert([
	            'name' => 'Babyshowers',
	            'image' => '/MaskGroup9.png'
	        ]);
	    }
    }
}
