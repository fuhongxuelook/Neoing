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
		$category = $this->service->category(); //分类
		$route = $this->service->route();		//首页跳转路由
		$content = $this->service->content();	//内容
		$recommend = $this->service->recommend(); //推荐
		$newWork  = $this->service->newWork(); //新作品
		$artist = $this->service->artist();
    	return view('art/index',compact('category','route','content','recommend','newWork','artist'));
	}
}