<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class RoleForProduct extends \app\core\AccessFilter{
	public function execute(){
		if($_SESSION['role'] != 'admin'){
			header('location:/Food/index?error=You must be an Admin to access this area.');
			return true;
		}
		return false;
	}
}