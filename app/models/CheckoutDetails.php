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

	public function getFood($food_id){
		$SQL = "SELECT * FROM food CROSS JOIN assign_food ON food.food_id=assign_food.food_id CROSS JOIN checkout_details ON assign_food.assign_food_id=checkout_details.assign_food_id WHERE food.food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$food_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CheckoutDetails');
		return $STMT->fetch();
	}

	public function get($checkout_details_id){
		$SQL = "SELECT * FROM checkout_details WHERE checkout_details_id=:checkout_details_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['checkout_details_id'=>$checkout_details_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\CheckoutDetails');
		return $STMT->fetch();
	}

	public function getForCheckout($checkout_id){
		$SQL = "SELECT * FROM food CROSS JOIN assign_food ON food.food_id=assign_food.food_id CROSS JOIN checkout_details ON assign_food.assign_food_id=checkout_details.assign_food_id WHERE checkout_id=:checkout_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['checkout_id'=>$checkout_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Checkout');
		return $STMT->fetchAll();
	}

	public function getByUser($account_id){
		$SQL = "SELECT * FROM checkout INNER JOIN checkout_details WHERE checkout.checkout_id=checkout_details.checkout_id AND account_id=:account_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['checkout_id'=>$checkout_id,
						'account_id'=>$this->$account_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Checkout');
		return $STMT->fetch();
	}

	public function insert()
	{
		$SQL = "INSERT INTO checkout_details(checkout_id, assign_food_id, order_quantity, total_price) VALUES (:checkout_id, :assign_food_id, :order_quantity, :total_price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['checkout_id'=>$this->checkout_id,
						'assign_food_id'=>$this->assign_food_id,
						'order_quantity'=>$this->order_quantity,
						'total_price'=>$this->total_price]);
	}

	public function updateQty(){
		$SQL = "UPDATE checkout_details SET order_quantity=order_quantity+:order_quantity WHERE checkout_id = :checkout_id AND assign_food_id = :assign_food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['order_quantity'=>1,
						'checkout_id'=>$this->checkout_id,
						'assign_food_id'=>$this->assign_food_id]);
	}

	public function removeQty(){
		$SQL = "UPDATE checkout_details SET order_quantity=order_quantity-:order_quantity WHERE checkout_id = :checkout_id AND assign_food_id = :assign_food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['order_quantity'=>1,
						'checkout_id'=>$this->checkout_id,
						'assign_food_id'=>$this->assign_food_id]);
	}

	public function updatePrice(){
		$SQL = "UPDATE checkout_details CROSS JOIN assign_food ON checkout_details.assign_food_id=assign_food.assign_food_id CROSS JOIN food ON assign_food.food_id=food.food_id SET total_price=food.price*order_quantity WHERE checkout_id = :checkout_id AND checkout_details.assign_food_id = :assign_food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['checkout_id'=>$this->checkout_id,
						'assign_food_id'=>$this->assign_food_id]);
	}

}