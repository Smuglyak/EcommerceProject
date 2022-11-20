<?php

namespace app\models;

class Checkout extends \app\core\Model{

	public function insert(){
		$SQL = "INSERT INTO history(checkout_id, date_ordered) VALUES (:checkout_id, :date_ordered)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['checkout_id'=>$this->checkout_id,
						'date_ordered'=>$this->date_ordered]);
	}
	
}