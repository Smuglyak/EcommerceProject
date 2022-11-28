<?php

namespace app\models;

class SecurityQuestion extends \app\core\Model{

	public $account_id;

	public function getQuestion($account_id){
		$SQL = "SELECT * FROM security_question WHERE account_id=:account_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$account_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\SecurityQuestion');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO security_question(account_id, question, answer) VALUES (:account_id, :question, :answer)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['account_id'=>$this->account_id,
						'question'=>$this->question,
						'answer'=>$this->answer]);
	}

}
