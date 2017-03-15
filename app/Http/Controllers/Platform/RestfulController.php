<?php

namespace Nor\Http\Controllers\Platform;


use Nor\Http\Controllers\Controller;
use Nor\Asset\Engine\Platform\PlatformService;
use Nor\Http\Requests\Platform\PlatformRequest;

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