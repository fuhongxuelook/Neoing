<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CityMapTableSeeder::class);
        //$this->call(CityTableSeeder::class);
        //$this->call(ProvinceTableSeeder::class);
        $this->call(DialogTableSeeder::class);
    }
}
