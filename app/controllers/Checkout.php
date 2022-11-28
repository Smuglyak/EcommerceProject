<?php

namespace app\controllers;

class Checkout extends \app\core\Controller{

	public function index(){

	}

	public function addToCheckout($food_id){
		$checkout = new \app\models\Checkout();
		$checkout = $checkout->findUserCart($_SESSION['user_id']);
		
		if($checkout==null){
			$checkout = new \app\models\Checkout();
			$checkout->user_id = $_SESSION['user_id'];
			$checkout->status = 'cart';
			$_SESSION['checkout_id'] = $checkout->createCheckout();
		}

		$food = new \app\models\Food();
		$food = $food->getById($food_id);
		$assignFood = new \app\models\AssignFood();
		

		$newFood = new \app\models\CheckoutDetails();
		$newFood->checkout_id = $_SESSION['checkout_id'];
		$newFood->food_id = $food_id;
		$newFood->total_price = $food->price;
		$newFood->order_quantity = ;
		$newFood->create();
		$this->view('Account/checkout', $newFood);
	}
}