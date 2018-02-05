<?php

use Illuminate\Database\Seeder;

class DialogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$dt = date('Y-m-d');
        $data = array(
            array(
                'path' => 'PcTpl/Home/Public/images/Index/20180114banner02.jpg',
                'url'  => 'market/jelly',
                'dt' => $dt,
                'jid'  => time().rand(100,999)
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/Index/20180114banner01.jpg',
                'url'  => 'market/jelly',
                'dt' => $dt,
                'jid'  => time().rand(100,999)
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/pc/1211banner04.jpg',
                'url'  => 'market/jelly',
                'dt' => $dt,
                'jid'  => time().rand(100,999)
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/pc/1490685075590.jpg',
                'url'  => 'market/jelly',
                'dt' => $dt,
                'jid'  => time().rand(100,999)
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/pc/1211banner01.jpg',
                'url'  => 'market/jelly',
                'dt' => $dt,
                'jid'  => time().rand(100,999)
            ),
            array(
                'path' => 'PcTpl/Home/Public/images/pc/1211banner03.jpg',
                'url'  => 'market/jelly',
                'dt' => $dt,
                'jid'  => time().rand(100,999)
            ),
        );
        DB::table('dialog')->insert($data);
    }
}
