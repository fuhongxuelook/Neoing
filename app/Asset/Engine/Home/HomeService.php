<?php

namespace Neo\Asset\Engine\Home;

//use Neo\Asset\Schema\Project\ProjectSchema as Schema;
//use Neo\Asset\Bean\Project\ProjectBean;
//use Neo\Asset\Config\ProjectConfig as Conf;
//use Illuminate\Support\Facades\Storage;

class HomeService  {

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
    
    public function content() {
        $content = array(
            '鸟布鲸' => array(
                '油画的世界之树',
                '汇集了世界每个角落里对油画怀抱热爱和真诚的人'
            ),
            '百家争鸣' => array(
                '刚进入美术学院的学生,油画领域里专业的画师',
                '颇有艺术造诣的上班族'
            ),
            '永葆价值' => array(
                '购买后的油画,随时都可以原价退回,可放心挑选'
            ),
        );
        return $content;
    }

    public function recommend() {
        $recommend = array(
            array(
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a69d6ef54.png',
                    'name' => '卷卷公主坐姿公仔',
                    'author' => '卷卷',
                    'price' => '39.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a6c3a8c78.png',
                    'name' => 'D型竹柄手拎小包',
                    'author' => '张果冻',
                    'price' => '123.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a6e5efd44.png',
                    'name' => '小胖看世界',
                    'author' => '钱总',
                    'price' => '139.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a6fd6ec32.png',
                    'name' => '孙悟空去哪了',
                    'author' => '诺一',
                    'price' => '299.00',
                ),
            ),array(
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a69d6ef54.png',
                    'name' => '卷卷公主坐姿公仔',
                    'author' => '卷卷',
                    'price' => '39.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a6c3a8c78.png',
                    'name' => 'D型竹柄手拎小包',
                    'author' => '张果冻',
                    'price' => '123.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a6e5efd44.png',
                    'name' => '小胖看世界',
                    'author' => '钱总',
                    'price' => '139.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a6fd6ec32.png',
                    'name' => '孙悟空去哪了',
                    'author' => '诺一',
                    'price' => '299.00',
                ),
            ),array(
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a69d6ef54.png',
                    'name' => '卷卷公主坐姿公仔',
                    'author' => '卷卷',
                    'price' => '39.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a6c3a8c78.png',
                    'name' => 'D型竹柄手拎小包',
                    'author' => '张果冻',
                    'price' => '123.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a6e5efd44.png',
                    'name' => '小胖看世界',
                    'author' => '钱总',
                    'price' => '139.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/5915a6fd6ec32.png',
                    'name' => '孙悟空去哪了',
                    'author' => '诺一',
                    'price' => '299.00',
                ),
            )
        );
        return $recommend;
    }

    public function newWork() {
        $newWork = array(
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/h5129210609812175915aa6a1bc7a.png',
                    'name' => '皮皮',
                    'author' => '陳建周',
                    'price' => '39.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/h5129207088328705915aa46d7a56.png',
                    'name' => 'D型竹柄手拎小包',
                    'author' => '张果冻',
                    'price' => '123.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/h5129202995327155915aa1de8bba.png',
                    'name' => '小胖看世界',
                    'author' => '钱总',
                    'price' => '139.00',
                )
        );
        return $newWork;
    }

    public function route() {
        $route = array(
            'jump' => '/module/index',
            'sale' => '/upload/index',
        );
        return $route;
    }

    public function artist() {
        $artist = array(
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/h5129162874834335915a88cba85e.jpg',
                    'name' => '陳建周',
                    'author' => '陳建周',
                    'price' => '39.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/h5129159567864555915a86ba5af4.jpg',
                    'name' => 'aa',
                    'author' => '张果冻',
                    'price' => '123.00',
                ),
                array(
                    'href' => '/market/jelly',
                    'src' => '../pic/h5129153398612775915a82e006f6.jpg',
                    'name' => '啦啦',
                    'author' => '钱总',
                    'price' => '139.00',
                )
        );
        return $artist;
    }
}