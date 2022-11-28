<?php

namespace app\models;

class CheckoutDetails extends \app\core\Model{

	// public function getAll(){
	// 	$SQL = "SELECT * FROM checkout_details";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute();
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CheckoutDetails');
	// 	return $STMT->fetchAll();
	// }

	public function getForCheckout($checkout_id){
		$SQL = "SELECT * FROM checkout_details WHERE checkout_id=:checkout_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['checkout_id'=>$checkout_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Checkout');
		return $STMT->fetchAll();
	}

	public function getByUser($account_id){
		$SQL = "SELECT * FROM checkout INNER JOIN checkout_details WHERE checkout.checkout_id=checkout_details.checkout_id AND account_id=:account_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$this->$account_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Checkout');
		return $STMT->fetch();
	}

	public function insertIntoCheckout()
	{
		$SQL = "INSERT INTO cart(checkout_id, assignFood_id, order_quantity, total_price) VALUES (:checkout_id, :assignFood_id, :order_quantity, :total_price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['checkout_id'=>$this->checkout_id,
						'assignFood_id'=>$this->assignFood_id,
						'order_quantity'=>$this->order_quantity,
						'total_price'=>$this->total_price]);
	}

	public function updateCheckoutStatus(){
		$SQL = "UPDATE checkout SET status=:status WHERE account_id = :account_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>'paid',
						'account_id'=>$this->account_id]);
	}
}