<?php

namespace app\models;

class FoodMenu extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM food_menu";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\FoodMenu');
		return $STMT->fetchAll();
	}

	public function getComboPrice(){
		$SQL = "SELECT SUM(price) FROM food_menu INNER JOIN food WHERE food_menu.food_id=food.food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\FoodMenu');
		return $STMT->fetchAll();
	}

	// public function getFood($food_id){
	// 	$SQL = "SELECT * FROM food_menu WHERE food_id=:food_id";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['food_id'=>$food_id]);
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\FoodMenu');
	// 	return $STMT->fetchAll();
	// }

	// public function getMenu($menu_id){
	// 	$SQL = "SELECT * FROM food_menu WHERE menu_id=:menu_id";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['menu_id'=>$menu_id]);
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\FoodMenu');
	// 	return $STMT->fetchAll();
	// }

	public function insert(){
		$SQL = "INSERT INTO food_menu(food_id, menu_id) VALUES (:food_id, :menu_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id,
						'menu_id'=>$this->menu_id]);
	}

	protected function update(){
		$SQL = "UPDATE food_menu SET food_id=:food_id, menu_id=:menu_id WHERE food_menu_id=:food_menu_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id,
						'menu_id'=>$this->menu_id,
						'food_menu_id'=>$this->food_menu_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM food_menu WHERE food_menu_id=:food_menu_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_menu_id'=>$this->food_menu_id]);
	}

	public function deleteByFood(){
		$SQL = "DELETE FROM food_menu WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id]);
	}

	public function deleteByMenu(){
		$SQL = "DELETE FROM food_menu WHERE menu_id=:menu_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['menu_id'=>$this->menu_id]);
	}

}