<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class Seller2fa extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] == 'admin'){
			$user = new \app\models\Account(); 	
			$user = $user->getById($_SESSION['account_id']);
			if($user->two_fa_code == null){
				header('location:/Main/setup2fa');
				return true;
			}else return false;
		}else{
			return false;
		}
			
	}
}