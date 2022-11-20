<?php

namespace app\controllers;

class Favorite extends \app\core\Controller{

	public function index()
    {
    	
    }

    public function getFavorite($account_id){
    	$favoriteFood = new \app\models\Favorite();
    	$foods = $favoriteFood->getById($account_id);
        $this->view('Account/favoriteFood', $foods);
    }

    public function addFavorite(){
			$favoriteFood = new \app\models\Favorite();
			$favoriteFood->account_id = $_POST['food_name'];
			$favoriteFood->food_id = $_POST['food_description'];
			$newFood->insert();
			header('location:/Account/favoriteFood');
    }

    public function deleteFavorite($favorite_id)
    {
    	$favoriteFood = new \app\models\Favorite();
		$favoriteFood = $favoriteFood->getById($favorite_id);
		$favoriteFood->delete();
		header('location:/Account/favoriteFood/');
    }
}