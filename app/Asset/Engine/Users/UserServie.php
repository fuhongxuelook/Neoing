<?php
namepsace Nor\Asset\Engine\Users;


use Nor\Http\Request\UserRequest;

class UserService {

	private $bean;

	function __construct(UserRequest $request) {
		$this->bean = $request;
	}	

	public function checkUser() {
		$account = $this->bean->getAccount();
		$password = $this->bean->getPassword();
	}

}