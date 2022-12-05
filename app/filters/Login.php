<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class Login extends \app\core\AccessFilter{
	public function execute(){
		if(!isset($_SESSION['account_id'])){
			header('location:/Main/index?error=You must be logged in to access this location.');
			return true;
		}
		return false;
	}
}