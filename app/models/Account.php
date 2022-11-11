<?php

namespace app\models;

class Account extends \app\core\Model{

public $username;
public $first_name;
public $last_name;

	public function getAll(){
		$SQL = "SELECT * FROM account";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Account');
		return $STMT->fetchAll();
	}

	public function get($username){
		$SQL = "SELECT * FROM account WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Account');
		return $STMT->fetch();
	}

	public function insert(){
		if(!$this->isValid()) return false;
		$SQL = "INSERT INTO account(username, first_name, last_name, password_hash) VALUES (:username, :first_name, :last_name, :password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,
						'first_name'=>$this->first_name,
						'last_name'=>$this->last_name,
						'password_hash'=>$this->password_hash]);
	}

	public function updatePassword(){
		$SQL = "UPDATE account SET password_hash=:password_hash WHERE account_id=:account_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['password_hash'=>$this->password_hash,
						'account_id'=>$this->account_id]);
	}

	public function update2fa(){
		$SQL = "UPDATE account SET two_fa_code=:two_fa_code WHERE account_id=:account_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['two_fa_code'=>$this->two_fa_code,
						'account_id'=>$this->account_id]);
	}
}