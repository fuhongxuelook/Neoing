<?php
namepsace Nor\Asset\Engine\Users;


use Nor\Asset\Bean\UserBean;

class UserService {

	private $bean;

    public function login(UserBean $params) {
    	$account = $params->getAccount();
    	$password = $params->getPassword();
    	$accountRes = Schema::select('id')
    			->where('account','=',$account)
    			->where('password','=',$password)
    			->first() ;
    	if(empty($accountRes){
    		return false;
    	}
        session(['user'=>$account]);
    	return true;
    }

}