<?php

namespace app\controllers;

class Checkout extends \app\core\Controller{

	#[\app\filters\Login]
	public function index(){
		$userCart = new \app\models\Checkout();
		$userCart = $userCart->findUserCheckout($_SESSION['account_id']);
		$displayCart = new \app\models\CheckoutDetails();
		$displayCart = $displayCart->getForCheckout($userCart->checkout_id);
		$this->view('Checkout/index', ['displayCart'=>$displayCart]);
	}

	#[\app\filters\Login]
	public function addFoodToCart($food_id){
		$cart = new \app\models\Checkout();
		$cart = $cart->findUserCheckout($_SESSION['account_id']);
		$details = new \app\models\CheckoutDetails();
		$details = $details->getFood($food_id, $cart->checkout_id);

		if($cart && $details){
			$addItem = new \app\models\CheckoutDetails();
			$getFood = new \app\models\AssignFood();
			$getFood = $getFood->getByFood($food_id, $cart->checkout_id);

			$addItem->checkout_id = $cart->checkout_id;
			$addItem->assign_food_id = $getFood->assign_food_id;
			$addItem->updateQty();
			$addItem->updatePrice();
			// header('location:/Food/viewFood/'. $food_id .'?message=Food added to Cart');
		}
		elseif($cart && !$details){
			$newItem = new \app\models\CheckoutDetails();
			$getFood = new \app\models\AssignFood();
			$getFoodPrice = new \app\models\Food();
			$getFood = $getFood->getByFood($food_id, $cart->checkout_id);
			$getFoodPrice = $getFoodPrice->getById($food_id);

			$newItem->checkout_id = $cart->checkout_id;
			$newItem->assign_food_id = $getFood->assign_food_id;
			$newItem->total_price = $getFoodPrice->price;
			$newItem->order_quantity = 1;
			$newItem->insert();
			// header('location:/Food/viewFood/'. $food_id .'?message=Food added to Cart');
		}
		else {
			$newCart = new \app\models\Checkout();
			$newCart->account_id = $_SESSION['account_id'];
			$newCart->status = 'cart';
			$_SESSION['checkout_id'] = $newCart->createCheckout();
			// header('location:/Food/viewFood/'. $food_id .'?message=Food added to Cart');
		}
		header('location:/Food/viewFood/'. $food_id .'?message=Food added to Cart');
	}

	// public function addComboToCheckout($food_id){
	// 	$checkout = new \app\models\Checkout();
	// 	$checkout = $checkout->findUserCheckout($_SESSION['user_id']);
		
	// 	if($checkout==null){
	// 		$checkout = new \app\models\Checkout();
	// 		$checkout->user_id = $_SESSION['user_id'];
	// 		$checkout->status = 'not_paid';
	// 		$_SESSION['checkout_id'] = $checkout->createCheckout();
	// 	}

	// 	$combo = new \app\models\Category();
	// 	$combo = $food->getById($food_id);
	// 	$assignFood = new \app\models\AssignFood();
		
	// 	$newItem = new \app\models\CheckoutDetails();
	// 	$newItem->checkout_id = $_SESSION['checkout_id'];
	// 	$newItem->food_id = $food_id;
	// 	$newItem->total_price = $assignFood->getFoodPrice();
	// 	$newItem->order_quantity = 1;
	// 	$newItem->create();
	// 	$this->view('Account/checkout', $newItem);
	// }

	#[\app\filters\Login]
	public function payCheckout(){
		$checkout = new \app\models\Checkout();
		$checkout = $checkout->findUserCheckout($_SESSION['account_id']);
		$checkout->status = 'paid';
		$checkout->updateCheckoutStatus();
		header('location:/Category/index');
	}

	#[\app\filters\Login]
	public function removeFromCart($checkout_details_id){
		$userCart = new \app\models\Checkout();
		$userCart = $userCart->findUserCheckout($_SESSION['account_id']);
		$displayOrder = new \app\models\CheckoutDetails();
		$displayOrder = $displayOrder->get($checkout_details_id);

		if($displayOrder->order_quantity > 1){
			$displayOrder->checkout_id = $userCart->checkout_id;
			$displayOrder->removeQty();
			$displayOrder->updatePrice();
		}
		else{
			$checkout->checkout_details_id = $checkout_details_id;
			$checkout->delete();
		}
		header('location:/Checkout/index');
	}

}