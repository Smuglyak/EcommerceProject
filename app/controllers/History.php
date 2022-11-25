<?php

namespace app\controllers;

class History extends \app\core\Controller{

	public function index(){
		$account = $_SESSION['account_id']
		$order = new \app\models\History();
		$orders = $order->getByAccount($account);
		$this->view('Account/checkHistory', $orders);
	}

}