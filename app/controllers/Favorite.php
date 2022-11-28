<?php

namespace app\controllers;

class Favorite extends \app\core\Controller{

	public function index()
    {
		$this->view('Favorite/index');
    }

    public function addFavorite($food_id){
			$favoriteFood = new \app\models\Favorite();
			$favoriteFood->account_id = $_SESSION['account_id'];
			$favoriteFood->food_id = $food_id;
			$favoriteFood->insert();
			header('location:/Food/viewFood?message=Food added to Favorite');
    }

    public function deleteFavorite($favorite_id)
    {
    	$favoriteFood = new \app\models\Favorite();
		$favoriteFood = $favoriteFood->getById($favorite_id);
		$favoriteFood->delete();
		header('location:/Favorite/index');
    }
}