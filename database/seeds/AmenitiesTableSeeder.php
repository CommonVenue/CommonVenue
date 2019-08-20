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
	            'name' => 'Wifi'
	        ]);

        	Amenity::insert([
	            'name' => 'Screen'
	        ]);

        	Amenity::insert([
	            'name' => 'Coffee'
	        ]);

        	Amenity::insert([
	            'name' => 'Whiteboard'
	        ]);

        	Amenity::insert([
	            'name' => 'Table'
	        ]);

        	Amenity::insert([
	            'name' => 'Restroom'
	        ]);

        	Amenity::insert([
	            'name' => 'Chairs'
	        ]);

        	Amenity::insert([
	            'name' => 'Conference Phone'
	        ]);
	    }
    }
}
