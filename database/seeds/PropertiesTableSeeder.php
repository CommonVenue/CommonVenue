<?php

use Illuminate\Database\Seeder;
use App\Models\WorkingHours;
use Carbon\Carbon;
class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory('App\Models\ContactPerson', 10)->create()
        ->each(function ($person) {
            $person->property()
            ->save(factory('App\Models\Property')->make())
            ->each(function ($property) {
                $property->images()
                ->saveMany(factory('App\Models\PropertyImage', 3)->make());

                $property->property_category()
                ->saveMany(factory('App\Models\PropertyCategory', 3)->make());
                
                $property->working_hours(
            		WorkingHours::insert([
            			'property_id' => $property->id,
			            'day' => 'monday',
			            'from_time' => Carbon::now()->format('H:i:s'),
						'to_time' => Carbon::now()->format('H:i:s'),
			        ]),
            		WorkingHours::insert([
            			'property_id' => $property->id,
			            'day' => 'tuesday',
			            'from_time' => Carbon::now()->format('H:i:s'),
						'to_time' => Carbon::now()->format('H:i:s'),
			        ]),
            		WorkingHours::insert([
            			'property_id' => $property->id,
			            'day' => 'wednesday',
			            'from_time' => Carbon::now()->format('H:i:s'),
						'to_time' => Carbon::now()->format('H:i:s'),
			        ]),
            		WorkingHours::insert([
            			'property_id' => $property->id,
			            'day' => 'thursday',
			            'from_time' => Carbon::now()->format('H:i:s'),
						'to_time' => Carbon::now()->format('H:i:s'),
			        ]),
            		WorkingHours::insert([
            			'property_id' => $property->id,
			            'day' => 'friday',
			            'from_time' => Carbon::now()->format('H:i:s'),
						'to_time' => Carbon::now()->format('H:i:s'),
			        ]),
            		WorkingHours::insert([
            			'property_id' => $property->id,
			            'day' => 'saturday',
			            'from_time' => Carbon::now()->format('H:i:s'),
						'to_time' => Carbon::now()->format('H:i:s'),
			        ]),
            		WorkingHours::insert([
            			'property_id' => $property->id,
			            'day' => 'sunday',
			            'from_time' => Carbon::now()->format('H:i:s'),
						'to_time' => Carbon::now()->format('H:i:s'),
			        ])
                );
            });
        });
    }
}
