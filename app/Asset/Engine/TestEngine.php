<?php
namespace Nor\Asset\Engine;

use Nor\Asset\Bean\UserBean;
use Nor\Asset\Schema\UserSchema;

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