<?php

namespace app\controllers;

class History extends \app\core\Controller{

//added specific account to history. Have to solve the account connection problem first(How to access specific account) 
	public function index(){
		$account = new \app\models\Account();
		$account->id = $_SESSION['account_id'];
		$order = new \app\models\History();
		$orders = $order->getByAccount($account);
		$this->view('Account/checkHistory', $orders);
	}

    public function edit()
    {
    }

    public function checkHistory()
    {
    }
}
