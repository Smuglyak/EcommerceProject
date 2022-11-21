<?php

namespace app\controllers;

class Review extends \app\core\Controller{

	public function index(){
		
	}

	public function add($food_id){
		if(isset($_POST['action'])){
			$review = new \app\models\Review();
			$review->account_id = $_SESSION['account_id'];
			$review->food_id = $food_id;
			$review->rating = $_POST['rating'];
			$review->comment = $_POST['comment'];
			$review->insert();
			header('location:/Food/viewFood?message=Review added!');
		}
		else{
			$food = new \app\models\Review();
			$this->view('Review/addReview');
		}
	}

	// public function edit($menu_id){
	// 	$menu = new \app\models\Menu();
	// 	$menu = $menu->get($menu_id);
	// 	if(isset($_POST['action'])){
	// 		$menu->menu_name = $_POST['menu_name'];
	// 		$menu->update();
	// 		header('location:/Menu/index');
	// 	}else{
	// 		$this->view('Menu/editMenu', $menu);
	// 	}
	// }

	// public function delete($menu_id){
	// 	$menu = new \app\models\Menu();
	// 	$menu->menu_id = $menu_id;
	// 	$menu->deleteFoodMenu();
	// 	$menu->delete();
	// 	header('location:/Menu/index');
	// }
}