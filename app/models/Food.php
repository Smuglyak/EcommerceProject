<?php

namespace app\models;

class Food extends \app\core\Model{


	public $food_name;
	public $food_description;
	public $price;

	public function getAll(){
		$SQL = "SELECT * FROM food";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetchAll();
	}

	public function getById($food_id){
		$SQL = "SELECT * FROM food WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$food_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetch();
	}

	public function getByName($food_name){
		$SQL = "SELECT * FROM food WHERE food_name=:food_name";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_name'=>$food_name]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO food(food_name, picture, food_description, price) VALUES (:food_name, :picture, :food_description ,:price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_name'=>$this->food_name,
						'picture'=>$this->picture,
						'food_description'=>$this->food_description,
						'price'=>$this->price]);
	}

	public function update(){
		$SQL = "UPDATE food SET food_name=:food_name, picture=:picture, food_description=:food_description, price=:price, is_available=:is_available WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_name'=>$this->food_name,
						'picture'=>$this->picture,
						'food_description'=>$this->food_description,
						'price'=>$this->price,
						'is_availablee'=>$this->is_available,
						'food_id'=>$this->food_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM food WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id]);
	}

	public function deleteFoodMenu(){
		$SQL = "DELETE FROM food_menu WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id]);
	}
}