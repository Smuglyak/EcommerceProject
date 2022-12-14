<?php

namespace app\controllers;

class Favorite extends \app\core\Controller{

	#[\app\filters\Login]
	public function index()
    {
    	$favorite = new \app\models\Favorite();
    	$favorites = $favorite->getByAccount($_SESSION['account_id']);
		$this->view('Favorite/index', $favorites);
    }

    #[\app\filters\Login]
    public function addFavorite($food_id){
		$favoriteFood = new \app\models\Favorite();
		$check = $favoriteFood->checkFavorite($_SESSION['account_id'], $food_id);
		if (!$check){
			$favoriteFood->account_id = $_SESSION['account_id'];
			$favoriteFood->food_id = $food_id;
			$favoriteFood->insert();
			header('location:/Favorite/index/'. $food_id .'?message=Food added to Favorite');
		}
		else {
			header('location:/Favorite/index/'. $food_id .'?error=Food is already in favorite');
		}
    }

    #[\app\filters\Login]
    public function deleteFavorite($favorite_id)
    {
    	$favoriteFood = new \app\models\Favorite();
		$favoriteFood->favorite_id = $favorite_id;
		$favoriteFood->delete();
		header('location:/Favorite/index');
    }
}