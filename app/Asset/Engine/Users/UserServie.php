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

    public function addUser(UserBean $params) {
        $account = $params->getAccount();
        $res = Schema::select('id')
            ->where('account',$account)
            ->first();
        if(!empty($res)) {
            return false;
        }
        Schema::insert(['account'=>$account,'password'=>$password]);
        return true;
    }

    public function updatePw(UserBean $params) {
        $account = $params->getAccount();
        $password = $params->getPassword();
        $res = Schema::select('id')
            ->where('account',$account)
            ->first();
        if(empty($res)) {
            return false ;
        }
        Schema::where('account',$account)
            ->update(['password'=>$password]);
        return true;
    }


}