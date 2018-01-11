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
    	return view('art/index',compact('category','route'));
	}
}