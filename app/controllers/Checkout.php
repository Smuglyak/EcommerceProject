<?php

namespace app\controllers;

class Checkout extends \app\core\Controller{

	public function index(){

	}

	public function addFoodToCheckout($food_id){
		$checkout = new \app\models\Checkout();
		$checkout = $checkout->findUserCheckout($_SESSION['user_id']);
		
		if($checkout==null){
			$checkout = new \app\models\Checkout();
			$checkout->user_id = $_SESSION['user_id'];
			$checkout->status = 'not_paid';
			$_SESSION['checkout_id'] = $checkout->createCheckout();
		}

		$food = new \app\models\Food();
		$food = $food->getById($food_id);
		$assignFood = new \app\models\AssignFood();
		
		$newItem = new \app\models\CheckoutDetails();
		$newItem->checkout_id = $_SESSION['checkout_id'];
		$newItem->food_id = $food_id;
		$newItem->total_price = $assignFood->getFoodPrice();
		$newItem->order_quantity = ;
		$newItem->create();
		$this->view('Account/checkout', $newItem);
	}

	public function addComboToCheckout($food_id){
		$checkout = new \app\models\Checkout();
		$checkout = $checkout->findUserCheckout($_SESSION['user_id']);
		
		if($checkout==null){
			$checkout = new \app\models\Checkout();
			$checkout->user_id = $_SESSION['user_id'];
			$checkout->status = 'not_paid';
			$_SESSION['checkout_id'] = $checkout->createCheckout();
		}

		$combo = new \app\models\Category();
		$combo = $food->getById($food_id);
		$assignFood = new \app\models\AssignFood();
		
		$newItem = new \app\models\CheckoutDetails();
		$newItem->checkout_id = $_SESSION['checkout_id'];
		$newItem->food_id = $food_id;
		$newItem->total_price = $assignFood->getFoodPrice();
		$newItem->order_quantity = ;
		$newItem->create();
		$this->view('Account/checkout', $newItem);
	}

	public function payCheckout(){
		$checkout = new \app\models\Checkout();
		$checkout = $checkout->findUserCheckout($_SESSION['user_id']);

		$checkout->status = 'paid';
		$checkout->updateCheckoutStatus();
	}
}