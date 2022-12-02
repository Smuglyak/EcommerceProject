<?php

namespace app\models;

class AssignFood extends \app\core\Model{

	public function getAll(){
		$SQL = "SELECT * FROM assign_food";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\AssignFood');
		return $STMT->fetchAll();
	}

	public function getAllWithMenuId($menu_id){
		$SQL = "SELECT * FROM assign_food WHERE category_id=:menu_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['menu_id' => $menu_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\AssignFood');
		return $STMT->fetchAll();
	}

	public function getComboPrice(){
		$SQL = "SELECT SUM(price) FROM food CROSS JOIN assign_food ON food.food_id=assign_food.food_id CROSS JOIN category ON assign_food.category_id=category.category_id WHERE category_type=:category_type";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_type'=>$this->category_type]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\AssignFood');
		return $STMT->fetchAll();
	}

	public function getFoodPrice(){
		$SQL = "SELECT price FROM food CROSS JOIN assign_food ON food.food_id=assign_food.food_id AND category_type=:category_type";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id,
						'category_type'=>$this->category_type]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\AssignFood');
		return $STMT->fetchAll();
	}

	public function getFood($food_id){
		$SQL = "SELECT * FROM assign_food WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$food_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\AssignFood');
		return $STMT->fetchAll();
	}

	// public function getMenu($menu_id){
	// 	$SQL = "SELECT * FROM food_menu WHERE menu_id=:menu_id";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['menu_id'=>$menu_id]);
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\FoodMenu');
	// 	return $STMT->fetchAll();
	// }

	public function insert(){
		$SQL = "INSERT INTO assign_food(food_id, category_id) VALUES (:food_id, :category_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id,
						'category_id'=>$this->category_id]);
	}
	
	protected function update(){
		$SQL = "UPDATE assign_food SET food_id=:food_id, category_id=:category_id WHERE assign_food_id=:assign_food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id,
						'category_id'=>$this->category_id,
						'assign_food_id'=>$this->assign_food_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM assign_food WHERE assign_food_id=:assign_food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['assign_food_id'=>$this->assign_food_id]);
	}

	public function deleteByFood(){
		$SQL = "DELETE FROM assign_food WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$this->food_id]);
	}

	public function deleteByMenu(){
		$SQL = "DELETE FROM assign_food WHERE category_id=:category_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$this->category_id]);
	}

}