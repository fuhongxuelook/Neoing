<?php

namespace Neo\Asset\Engine\Module;

//use Neo\Asset\Schema\Project\ProjectSchema as Schema;
//use Neo\Asset\Bean\Project\ProjectBean;
//use Neo\Asset\Config\ProjectConfig as Conf;
//use Illuminate\Support\Facades\Storage;

class IndexService  {

	function __construct() {
	}

	public function category() {
		$category = array(
            '鸟布鲸' => array (
                '写生风景',
                '人物画',
                '平凡的生活',
                '街景'
            ),
            '画风' => array(
                '古典主义',
                '巴洛克艺术',
                '印象主义',
                '表现主义'
            ),
            '学院派' => array(
                '中央美术学院',
                '中国美术学院',
                '鲁迅美术学院',
                '四川美术学院',
                '其他美院',
            ),
            '流浪的艺术' => array(
                '北风',
                '南风',
                '大彩',
                '漂',
            ),
            '异域风采' => array(
                '欧美风情',
                '地中海艺术',
                '拉丁美洲',
                '龟兹文化'
            ),
        );
        return $category;
    }
    
    public function lists() {
        $lists = array(
            array(
                'href' => '/market/jelly',
                'src' => '../images/list/1494421129.png',
                'dataOriginal' => '/./Upload/Goods/smallImg/2017-05-10/1494421129.png',
                'name' => '西游系列',
                'author' => '诺一',
                'price' => '39.00',
            ),
            array(
                'href' => '/market/jelly',
                'src' => '../images/list/1494421159.png',
                'dataOriginal' => '/./Upload/Goods/smallImg/2017-05-10/1494421159.png',
                'name' => '西游系列',
                'author' => '诺一',
                'price' => '39.00',
            ),
            array(
                'href' => '/market/jelly',
                'src' => '../images/list/1494420933.png',
                'dataOriginal' => '/./Upload/Goods/smallImg/2017-05-10/1494420933.png',
                'name' => '西游系列',
                'author' => '诺一',
                'price' => '39.00',
            ),
            array(
                'href' => '/market/jelly',
                'src' => '../images/list/1494420910.png',
                'dataOriginal' => '/./Upload/Goods/smallImg/2017-05-10/1494420910.png',
                'name' => '西游系列',
                'author' => '诺一',
                'price' => '39.00',
            ),
            array(
                'href' => '/market/jelly',
                'src' => '../images/list/1494420889.png',
                'dataOriginal' => '/./Upload/Goods/smallImg/2017-05-10/1494420889.png',
                'name' => '西游系列',
                'author' => '诺一',
                'price' => '39.00',
            )
        );
        return $lists;
    }

    public function route() {
        $route = array(
            'jump' => '/market/jelly',
            'sale' => '/upload/index',
        );
        return $route;
    }

    public function position() {
        $position = array(
            '首页',
            '学院派',
            '川美作品'
        );
        return $position;
    }

}












