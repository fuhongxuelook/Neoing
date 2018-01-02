<?php 
namespace Neo\Http\Requests\Platform;

use Neo\Asset\Bean\Platform\PlatformBean;
use Request;

class PlatformRequest {
	private $bean;

	function __construct(PlatformBean $bean) {
		$this->bean = $bean;
	}

	public function toParamsBean(Request $request) {
		$this->bean->setId($request->input('id'));
		$this->bean->setArtist($request->input('artist'));
		$this->bean->setId($request->input('space'));
		return $this->bean;
	}
}