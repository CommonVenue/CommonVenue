<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(CominSoonCitiesTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}
