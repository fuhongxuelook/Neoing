<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$fp = fopen(__DIR__.'/ini/Province.ini', 'r');
    	$data = array();
    	$head = fgetcsv($fp);
    	while (! feof($fp)) {
    		$data[] = array_combine($head,fgetcsv($fp));
    	}
        //
        DB::table('province')->insert($data);
    }
}
