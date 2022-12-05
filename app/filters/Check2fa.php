<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class Check2fa extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] == 'admin'){
			if($_SESSION['two_fa_code']!= null){
				header('location:/Main/check2fa');
				return true;
			}else return false;
		}else{
			return false;
		}
	}
}