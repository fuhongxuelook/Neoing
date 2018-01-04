<?php

namespace Neo\Http\Controllers\Project;


use Neo\Http\Controllers\Controller;
//use Neo\Asset\Engine\Project\ProjectService;
//use Neo\Http\Requests\Project\ProjectRequest;

class RestfulController extends Controller{

	private $service ;

	function __construct() {
	}

	public function buildProject() {
		return view('welcome');
	}
}