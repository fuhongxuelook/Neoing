<?php
namespace Nor\Http\Request;

use Nor\Asset\Bean\UserBean;
use Request;
class UserRequest implements RequestInterface {

	private $bean;

	function __construnt(UserBean $bean) {
		$this->bean = $bean;
	}
	
	public function toParamsBean(Request $request) {
		$this->bean->setAccount($request->input('account'));
		$this->bean->setPassword($request->input('password'));
		$this->bean->setTel($request->input('tel'));
		return $this->bean;
	}
}