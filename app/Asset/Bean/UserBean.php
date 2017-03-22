<?php
namespace Nor\Asset\Bean;

class UserBean {

	private $account ;
	private $password;
	private $tel;

	public function setAccount($account) {
		$this->account = $account;
	}

	public function getAccount() {
		return $this->account;
	}

	public function setPassword($password) {
		$this->password = $password;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setTel($tel) {
		$this->tel = $tel;
	}

	public function getTel() {
		return $this->tel;
	}

}