<?php

namespace app\models;

class Menu extends \app\core\Model{


	public $menu_name;

	public function getAll(){
		$SQL = "SELECT * FROM menu";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Menu');
		return $STMT->fetchAll();
	}

	//public function get($menu_id){
		//$SQL = "SELECT * FROM menu WHERE menu_id=:menu_id";
		//$STMT = self::$_connection->prepare($SQL);
		//$STMT->execute(['menu_id'=>$menu_id]);
		//$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Menu');
		//return $STMT->fetch();
	//}

	protected function insert(){
		$SQL = "INSERT INTO menu(menu_name) VALUES (:menu_name)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['menu_name'=>$this->menu_name,]);
	}

	protected function update(){
		$SQL = "UPDATE menu SET menu_name=:menu_name WHERE menu_id=:menu_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['menu_name'=>$this->menu_name,
						'menu_id'=>$this->menu_id]);
	}

	public function deleteFood(){
		$SQL = "DELETE FROM food WHERE menu_id=:menu_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['menu_id'=>$this->menu_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM menu WHERE menu_id=:menu_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['menu_id'=>$this->menu_id]);
	}
}
