<?php

namespace Neo\Http\Controllers\Index;


use Neo\Http\Controllers\Controller;
use Neo\Asset\Engine\Home\IndexService;
//use Neo\Http\Requests\Home\HomeRequest;

class RestfulController extends Controller{

	private $service ;

	function __construct(IndexService $service) {
		$this->service = $service;
	}

	public function index() {
		$themes = $this->service->theme();
		$category = $this->service->category();
		$recommends = $this->service->recommend();
		$info = $this->service->aboutUS();
		$partners = $this->service->partner();
    	return view('index',compact('themes','category','recommends','info','partners'));
	}
}