<?php
namespace Neo\Asset\Engine;

use Neo\Asset\Bean\UserBean;
use Neo\Asset\Schema\UserSchema;

class TestEngine {
	
	private $schema ;

	function __construct(UserSchema $schema) {
		$this->schema = $schema;
	}

	public function checkOutUser(UserBean $params) {
		$account = $params->getAccount();
		$pw = $params->getPassword();
		$column = $this->schema->account($account)->first();
		if(empty($column)) {
			return false;
		}
		return true;
	}
}