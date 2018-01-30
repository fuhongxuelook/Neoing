<?php

namespace Neo\Http\Controllers\Index;


use Neo\Http\Controllers\Controller;
use Neo\Asset\Engine\Home\HomeService;
//use Neo\Http\Requests\Home\HomeRequest;

class RestfulController extends Controller{

	private $service ;

	function __construct(HomeService $service) {
		$this->service = $service;
	}

	public function index() {
    	return view('index');
	}
}