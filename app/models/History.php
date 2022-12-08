<?php

namespace app\models;

class History extends \app\core\Model{

	// public function getAll($checkout_id){
	// 	$SQL = "SELECT * FROM history WHERE checkout_id=$checkout_id";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute();
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\History');
	// 	return $STMT->fetchAll();
	// }

	public function getByAccount($account_id){
		$SQL = "SELECT * FROM checkout WHERE account_id=$account_id";	
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$this->$account_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\History');
		return $STMT->fetchAll();
	}

	public function insert(){
		$SQL = "INSERT INTO history(checkout_id, date_ordered) VALUES (:checkout_id, :date_ordered)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['checkout_id'=>$this->checkout_id,
						'date_ordered'=>$this->date_ordered]);
	}
	
}