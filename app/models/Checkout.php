<?php

namespace app\models;

class Checkout extends \app\core\Model{

	public function createCheckout(){
		$SQL = "INSERT INTO checkout(account_id, status) VALUES (:account_id, :status)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$this->account_id,
						'status'=>$this->status]);
	}

	public function updateCheckoutStatus(){
		$SQL = "UPDATE checkout SET status=:status WHERE account_id = :account_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>$this->status,
						'account_id'=>$this->account_id]);
	}
	
}