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
        Schema::disableForeignKeyConstraints();

        // $this->call(UserSeeder::class);
        DB::table('countries')->truncate();
        $this->call(CountrySeeder::class);

        DB::table('places')->truncate();
        $this->call(PlaceSeeder::class);


        Schema::enableForeignKeyConstraints();
    }
}
