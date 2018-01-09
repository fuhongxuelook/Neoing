<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = fopen(__DIR__.'/ini/City.ini', 'r');
    	$data = array();
    	$head = fgetcsv($fp);
    	while (! feof($fp)) {
    		$data[] = array_combine($head,fgetcsv($fp));
    	}
        //
        DB::table('city')->insert($data);
    }
}
