<?php

use App\Models\Amenity;
use Illuminate\Database\Seeder;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Amenity::count() == 0) {

        	Amenity::insert([
	            'name' => 'Wifi',
	            'icon' => '<i class="fas fa-wifi"></i>'
	        ]);

        	Amenity::insert([
	            'name' => 'Screen',
	            'icon' => '<i class="fas fa-tv"></i>'
	        ]);

        	Amenity::insert([
	            'name' => 'Coffee',
	            'icon' => '<i class="fas fa-coffee"></i>'
	        ]);

        	Amenity::insert([
	            'name' => 'Whiteboard',
	            'icon' => '<i class="fas fa-chalkboard"></i>'
	        ]);

        	Amenity::insert([
	            'name' => 'Table',
	            'icon' => '<i class="fas fa-table"></i>'
	        ]);

        	Amenity::insert([
	            'name' => 'Restroom',
	            'icon' => '<i class="fas fa-toilet-paper"></i>'
	        ]);

        	Amenity::insert([
	            'name' => 'Chairs',
	            'icon' => '<i class="fas fa-chair"></i>'
	        ]);

        	Amenity::insert([
	            'name' => 'Conference Phone',
	            'icon' => '<i class="fas fa-phone"></i>'
	        ]);
	    }
    }
}
