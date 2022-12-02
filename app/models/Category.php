<?php

namespace app\models;

class Category extends \app\core\Model{

	public $category_name;
	public $category_id;

	public function getAll(){
		$SQL = "SELECT * FROM categories";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetchAll();
	}

	public function getAllMenus(){
		$SQL = "SELECT * FROM categories WHERE category_type=:category_type";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_type'=>'Menu']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetchAll();
	}

	public function getAllCombos(){
		$SQL = "SELECT * FROM categories WHERE category_type=:category_type";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_type'=>'Combo']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetchAll();
	}

	public function getByType($category_type){
		$SQL = "SELECT * FROM categories WHERE category_type=:category_type";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_type'=> $category_type]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetchAll();
	}

	public function getByName($category_name){
		$SQL = "SELECT * FROM categories WHERE category_name=:category_name";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_name'=>$category_name]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetch();
	}

	public function getById($category_id){
		$SQL = "SELECT * FROM categories WHERE category_id=:category_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$category_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO categories(category_name, category_type, category_description) VALUES (:category_name, :category_type, :category_description)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute([
			'category_name' => $this->category_name,
			'category_type' => $this->category_type, 'category_description' => $this->category_description
		]);
	}

	public function update(){
		$SQL = "UPDATE categories SET category_name=:category_name, category_description=:category_description, category_type=:category_type WHERE category_id=:category_id";

		$STMT = self::$_connection->prepare($SQL);
		
		$STMT->execute(['category_name'=>$this->category_name,
			'category_description' => $this->category_description,
			'category_type' => $this->category_type,
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
