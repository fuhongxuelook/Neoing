<?php

namespace Neo\Http\Controllers\Ajax;


use Neo\Http\Controllers\Controller;
use Neo\Asset\Engine\Ajax\AjaxService;

class RestfulController extends Controller{

	private $service ;

	function __construct(AjaxService $service) {
		$this->service = $service;
	}

	public function dealAjax() {
		$ret = $this->service->dealAjax();
		return response()->json(array(
            'status' => 1,
            'msg' => $ret,
        ));
	}
}