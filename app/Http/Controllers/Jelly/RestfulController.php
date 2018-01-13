<?php

namespace Neo\Http\Controllers\Jelly;


use Neo\Http\Controllers\Controller;
use Neo\Asset\Engine\Jelly\JellyService;
//use Neo\Http\Requests\Home\HomeRequest;

class RestfulController extends Controller{

	private $service ;

	function __construct(JellyService $service) {
		$this->service = $service;
	}

	public function index() {
		$jelly = $this->service->jelly();
		$header = $this->service->header();
    	return view('art/jelly',compact('jelly','header'));
	}
}