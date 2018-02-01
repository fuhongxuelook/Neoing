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
		$recommends = $this->service->recommend();
		$brief = $this->service->brief();
		$introduce = $this->service->introduce();
		$artworks= $this->service->artworks();
		$author = $this->service->author();
    	return view('art/jelly',compact('jelly','header','recommends','brief','introduce','artworks','author'));
	}
}