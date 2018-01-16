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
                'view' => '写生风景',
                'character' => '人物画',
                'life' => '平凡的生活',
                'street' => '街景'
            ),
            '画风' => array(
                'classic' => '古典主义',
                'baroque' => '巴洛克艺术',
                'impressionism' => '印象主义',
                'exprisseonism' => '表现主义'
            ),
            '学院派' => array(
                'cafa' => '中央美术学院',
                'caa'  => '中国美术学院',
                'lafa' => '鲁迅美术学院',
                'sfai' => '四川美术学院',
                'other' => '其他美院',
            ),
            '流浪的艺术' => array(
                'north' => '北风',
                'south' => '南风',
                'color' => '大彩',
                'float' => '漂',
            ),
            '异域风采' => array(
                'EA' => '欧美风情',
                'mediterranean'  => '地中海艺术',
                'latin' => '拉丁美洲',
                'qiuci' => '龟兹文化'
            ),
        );
        return $category;
    }
    
    public function lists() {
        $lists = array(
            array(
                'href' => '/market/jelly',
                'src' => 'images/list/1494421129.png',
                'dataOriginal' => '/./Upload/Goods/smallImg/2017-05-10/1494421129.png',
                'name' => '西游系列',
                'author' => '诺一',
                'price' => '39.00',
            ),
            array(
                'href' => '/market/jelly',
                'src' => 'images/list/1494421159.png',
                'dataOriginal' => '/./Upload/Goods/smallImg/2017-05-10/1494421159.png',
                'name' => '西游系列',
                'author' => '诺一',
                'price' => '39.00',
            ),
            array(
                'href' => '/market/jelly',
                'src' => 'images/list/1494420933.png',
                'dataOriginal' => '/./Upload/Goods/smallImg/2017-05-10/1494420933.png',
                'name' => '西游系列',
                'author' => '诺一',
                'price' => '39.00',
            ),
            array(
                'href' => '/market/jelly',
                'src' => 'images/list/1494420910.png',
                'dataOriginal' => '/./Upload/Goods/smallImg/2017-05-10/1494420910.png',
                'name' => '西游系列',
                'author' => '诺一',
                'price' => '39.00',
            ),
            array(
                'href' => '/market/jelly',
                'src' => 'images/list/1494420889.png',
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
            'jump' => '/market/jelly/',
            'sale' => '/upload/index/',
        );
        return $route;
    }

    public function position($cate,$module) {
        $position = array(
            '首页',
            $cate,
            $module,
        );
        return $position;
    }

}












