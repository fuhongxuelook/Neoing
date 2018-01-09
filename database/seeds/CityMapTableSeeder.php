<?php

use Illuminate\Database\Seeder;

class CityMapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = fopen(__DIR__.'/ini/CityMap.ini', 'r');
    	$data = array();
    	$head = fgetcsv($fp);
    	while (! feof($fp)) {
    		$data[] = array_combine($head,fgetcsv($fp));
    	}
        //
        DB::table('city_map')->insert($data);
    }
}
