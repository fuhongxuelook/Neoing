<?php

namespace Neo\Asset\Engine\Jelly;

//use Neo\Asset\Schema\Project\ProjectSchema as Schema;
//use Neo\Asset\Bean\Project\ProjectBean;
//use Neo\Asset\Config\ProjectConfig as Conf;
//use Illuminate\Support\Facades\Storage;

class JellyService  {

	function __construct() {
	}


    public function route() {
        $route = array(
            'jump' => '/module/index',
            'sale' => '/upload/index',
        );
        return $route;
    }

    public function jelly() {
        $jelly = array(
            'src' => 'artNet/img/20171106132355226c63d5096.jpg@800h_800w_0e_1l.src',
            'name' => '角落'
        );
        return $jelly;
    }

    public function header() {
        $header = array(
            array(
                'name' => '鸟布鲸',
                'url'  => '/'
            ),
            array(
                'name' => '主页',
                'url'  => '/home/index'
            ),
            array(
                'name' => '四川美术学院',
                'url'  => '/module/list'
            ),
            array(
                'name' => '角落',
                'url'  => '/art/jelly'
            ),
        );
        return $header;
    }
   
}