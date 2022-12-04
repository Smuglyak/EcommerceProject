<?php

namespace app\models;

class Favorite extends \app\core\Model{

	// public function getAll(){
	// 	$SQL = "SELECT * FROM favorite";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute();
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Favorite');
	// 	return $STMT->fetchAll();
	// }

	public function getByAccount($account_id){
		$SQL = "SELECT * FROM favorite CROSS JOIN food ON favorite.food_id=food.food_id WHERE account_id=:account_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$account_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Favorite');
		return $STMT->fetchAll();
	}

	public function get($favorite_id){
		$SQL = "SELECT * FROM favorite WHERE favorite_id=:favorite_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['favorite_id'=>$favorite_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Favorite');
		return $STMT->fetchAll();
	}

	public function checkFavorite($account_id, $food_id){
		$SQL = "SELECT * FROM favorite WHERE account_id=:account_id AND food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$account_id,
						'food_id'=>$food_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Favorite');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO favorite(account_id, food_id) VALUES (:account_id, :food_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$this->account_id,
						'food_id'=>$this->food_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM favorite WHERE favorite_id=:favorite_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['favorite_id'=>$this->favorite_id]);
	}
}