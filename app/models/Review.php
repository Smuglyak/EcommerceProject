<?php

namespace app\models;

class Review extends \app\core\Model{
	public $rating;
	public $comment;

	//public function getAll(){
		//$SQL = "SELECT * FROM review";
		//$STMT = self::$_connection->prepare($SQL);
		//$STMT->execute();
		//$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		//return $STMT->fetchAll();
	//}

	public function getAllForFood($food_id){
		$SQL = "SELECT * FROM review CROSS JOIN account ON review.account_id=account.account_id WHERE food_id=:food_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['food_id'=>$food_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

	public function getForAccount($account_id){
		$SQL = "SELECT * FROM review WHERE account_id=:account_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$account_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

	public function get($review_id){
		$SQL = "SELECT * FROM review WHERE review_id=:review_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['review_id'=>$review_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO review(account_id, food_id, rating, comment) VALUES (:account_id, :food_id, :rating, :comment)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$this->account_id,
						'food_id'=>$this->food_id,
						'rating'=>$this->rating,
						'comment'=>$this->comment]);
		return self::$_connection->lastInsertId();
	}

	public function update(){
		$SQL = "UPDATE review SET rating=:rating, comment=:comment WHERE review_id=:review_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['ratin'=>$this->rating,
						'comment'=>$this->comment,
						'review_id'=>$this->review_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM review WHERE review_id=:review_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['review_id'=>$this->review_id]);
	}
}