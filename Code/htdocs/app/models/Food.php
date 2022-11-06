<?php

namespace app\models;

class Food extends \app\core\Model{


	public $food_name;
	public $food_description;
	public $price

	public function getAll(){
		$SQL = "SELECT * FROM food";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetchAll();
	}

	public function getForMenu($menu_id){
		$SQL = "SELECT * FROM food WHERE menu_id=:menu_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['menu_id'=>$menu_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetchAll();
	}

	public function get($food_id){
		$SQL = "SELECT * FROM food WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$food_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetch();
	}

	protected function insert(){
		$SQL = "INSERT INTO food(menu_id, food_name, picture, food_description, price) VALUES (:menu_id, :food_name, :picture, :food_description ,:price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['menu_id'=>$this->menu_id,
						'food_name'=>$this->food_name,
						'picture'=>$this->picture,
						'food_description'=>$this->food_description,
						'price'=>$this->price]);
	}

	protected function update(){
		$SQL = "UPDATE food SET food_name=:food_name, picture=:picture, food_description=:food_description, price=:price WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_name'=>$this->food_name,
						'picture'=>$this->picture,
						'food_description'=>$this->food_description,
						'price'=>$this->price,
						'food_id'=>$this->food_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM food WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id]);
	}
}