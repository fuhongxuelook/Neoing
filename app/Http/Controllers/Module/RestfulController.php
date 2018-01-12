<?php

namespace Neo\Http\Controllers\Module;


use Neo\Http\Controllers\Controller;
use Neo\Asset\Engine\Module\IndexService;
//use Neo\Http\Requests\Home\HomeRequest;

class RestfulController extends Controller{

	private $service ;

	function __construct(IndexService $service) {
		$this->service = $service;
	}

	public function index() {
		$category = $this->service->category(); //分类
		$route = $this->service->route();		//首页跳转路由
		$position = $this->service->position();
		$lists = $this->service->lists();
    	return view('art/list',compact('category','route','position','lists'));
	}
}