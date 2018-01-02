<?php

namespace Neo\Http\Controllers\Platform;


use Neo\Http\Controllers\Controller;
use Neo\Asset\Engine\Platform\PlatformService;
use Neo\Http\Requests\Platform\PlatformRequest;

class RestfulController extends Controller{

	private $service ;

	function __construct(PlatformService $service) {
		$this->service = $service;
	}

	public function listProducts() {
		$res = $this->service->listProducts();
		return view('welcome',compact('res'));
	}
}