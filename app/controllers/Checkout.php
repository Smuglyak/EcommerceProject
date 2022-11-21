<?php

namespace app\controllers;

class Checkout extends \app\core\Controller{

	public function index(){

	}

	public function addToCheckout(){
		$account_id = $_SESSION['account_id']
		$checkout = new \app\models\Checkout();
		
	}
}