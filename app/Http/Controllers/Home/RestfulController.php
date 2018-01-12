<?php

namespace Neo\Http\Controllers\Home;


use Neo\Http\Controllers\Controller;
use Neo\Asset\Engine\Home\HomeService;
//use Neo\Http\Requests\Home\HomeRequest;

class RestfulController extends Controller{

	private $service ;

	function __construct(HomeService $service) {
		$this->service = $service;
	}

	public function index() {
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
		$route = array(
			'jump' => '/art/list',
			'sale' => '/upload/index',
		);
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
		$lists = array(
			array(
				array(
					'href' => 'www.baidu.com',
					'src' => '../pic/5915a69d6ef54.png',
					'name' => '卷卷公主坐姿公仔',
					'author' => '卷卷',
					'price' => '39.00',
				),
				array(
					'href' => 'www.baidu.com',
					'src' => '../pic/5915a6c3a8c78.png',
					'name' => 'D型竹柄手拎小包',
					'author' => '张果冻',
					'price' => '123.00',
				),
				array(
					'href' => 'www.baidu.com',
					'src' => '../pic/5915a6e5efd44.png',
					'name' => '小胖看世界',
					'author' => '钱总',
					'price' => '139.00',
				),
				array(
					'href' => 'www.baidu.com',
					'src' => '../pic/5915a6fd6ec32.png',
					'name' => '孙悟空去哪了',
					'author' => '诺一',
					'price' => '299.00',
				),
			)
		);
    	return view('art/index',compact('category','route','content','lists'));
	}
}