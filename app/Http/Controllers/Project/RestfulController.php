<?php

namespace Neo\Http\Controllers\Project;


use Neo\Http\Controllers\Controller;
use Neo\Asset\Engine\Project\ProjectService;
use Neo\Http\Requests\Project\ProjectRequest;

class RestfulController extends Controller{

	private $service ;

	function __construct(ProjectService $service) {
		$this->service = $service;
	}

	public function index() {
		return view('art/upload');
	}

	public function buildProject(ProjectRequest $request) {
		$ret = $this->service->buildProject($request->toParamsBean());
		dd($ret);
	}
}