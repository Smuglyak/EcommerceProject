<?php

namespace app\models;

class Category extends \app\core\Model{


	public $category_name;

	public function getAllMenus(){
		$SQL = "SELECT * FROM categories WHERE type=Menu";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetchAll();
	}

	public function getAllCombos(){
		$SQL = "SELECT * FROM categories WHERE type=Combo";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetchAll();
	}

	public function getById($category_id){
		$SQL = "SELECT * FROM categories WHERE category_id=:category_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$category_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetch();
	}

	public function getByName($category_name){
		$SQL = "SELECT * FROM categories WHERE category_name=:category_name";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_name'=>$category_name]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO categories(category_name) VALUES (:category_name)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_name'=>$this->category_name,]);
	}

	protected function update(){
		$SQL = "UPDATE categories SET category_name=:category_name WHERE category_id=:category_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_name'=>$this->category_name,
						'category_id'=>$this->category_id]);
	}

	public function deleteAssignFood(){
		$SQL = "DELETE FROM assign_food WHERE category_id=:category_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$this->category_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM categories WHERE category_id=:category_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$this->category_id]);
	}
}
