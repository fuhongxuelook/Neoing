<?php 
namespace Neo\Http\Requests\Project;

use Neo\Asset\Bean\Project\ProjectBean;
use Request;

class ProjectRequest {
	private $bean;

	function __construct(PlatformBean $bean) {
		$this->bean = $bean;
	}

	public function toParamsBean(Request $request) {
		$this->bean->setFile($request->input('file'));
		return $this->bean;
	}
}