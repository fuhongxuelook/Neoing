<?php
namepsace Nor\Asset\Engine\Users;


use Nor\Http\Request\UserRequest;

class UserService {

	private $bean;

	function __construct(UserRequest $request) {
		$this->bean = $request;
	}	

    public function login($params) {
    	$account = $params['account'];
    	$password = $params['password'];
    	$accountRes = Schema::select('id')
    			->where('account','=',$account)
    			->where('password','=',$password)
    			->first() ;
    	if(empty($accountRes){
    		return false;
    	}
    	return true;
    }

    public
}