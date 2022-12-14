<?php

namespace app\models;

class Food extends \app\core\Model
{
	public $food_name;
	public $food_description;
	public $price;
	public $is_available;

	public function getAll()
	{
		$SQL = "SELECT * FROM food";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetchAll();
	}

	public function getAllAvailable()
	{
		$SQL = "SELECT * FROM food WHERE is_available='TRUE'";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetchAll();
	}

	public function getById($food_id)
	{
		$SQL = "SELECT * FROM food WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$food_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetch();
	}

	public function getByName($food_name)
	{
		$SQL = "SELECT * FROM food WHERE food_name=:food_name";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_name' => $food_name]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetch();
	}

	public function getReviews()
	{
		$SQL = "SELECT * FROM review CROSS JOIN account ON review.account_id=account.account_id WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id' => $this->food_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

	public function insert()
	{
		$SQL = "INSERT INTO food(food_name, picture, food_description, price, is_available) VALUES (:food_name, :picture, :food_description ,:price, :is_available)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute([
			'food_name' => $this->food_name,
			'picture' => $this->picture,
			'food_description' => $this->food_description,
			'price' => $this->price,
			'is_available' => $this->is_available
		]);
		return self::$_connection->lastInsertId();
	}

	public function update()
	{
		$SQL = "UPDATE food SET food_name=:food_name, picture=:picture, food_description=:food_description, price=:price WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute([
			'food_name' => $this->food_name,
			'picture' => $this->picture,
			'food_description' => $this->food_description,
			'price' => $this->price,
			'food_id' => $this->food_id
		]);
	}

	public function delete()
	{
		$SQL = "UPDATE food SET is_available=:is_available WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['is_available'=>'False',
						'food_id' => $this->food_id]);
	}

	public function deleteAssignFood()
	{
		$SQL = "DELETE FROM assign_food WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id' => $this->food_id]);
	}

	public function search($searchTerm)
	{
		//get all newest first
		$SQL = "SELECT * FROM food WHERE food_name LIKE :searchTerm";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['searchTerm' => "%$searchTerm%"]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetchAll();
	}

	public function sortByPrice($orderType)
	{
		$SQL = "SELECT * FROM food ORDER BY price " . ($orderType == 'Ascend'?'ASC':'DESC');
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetchAll();
	}

	public function getByCategory($orderType, $category)
	{
		$SQL = "SELECT * FROM food JOIN assign_food ON food.food_id = assign_food.food_id WHERE category_id = :category ORDER BY price " . ($orderType == 'Ascend' ? 'ASC' : 'DESC');
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category'=>$category]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetchAll();
	}

	public function getByCategoryUnordered($category){
		$SQL = "SELECT * FROM food JOIN assign_food ON food.food_id = assign_food.food_id WHERE category_id = :category";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category' => $category]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Food');
		return $STMT->fetchAll();
	}
}
