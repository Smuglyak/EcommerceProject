<?php

namespace app\controllers;

class Food extends \app\core\Controller{

	public function index(){
		$food = new \app\models\Food();
		$foods = $food->getAll();
		$this->view('Food/index', $foods);
	}

	//I am not sure if this is gonna work
	public function addFood(){
		if(isset($_POST['action'])){
			$newFood = new \app\models\Food();
			// $foodMenu = new \app\models\FoodMenu();
			$newFood->food_name = $_POST['food_name'];
			$newFood->food_description = $_POST['food_description'];
			$newFood->price = $_POST['price'];
			$filename = $this->saveFile($_FILES['picture']);
			$newFood->is_available = "True";
			$newFood->picture = $filename;
			$_SESSION['food_id'] = $newFood->insert();
			// $getFood->food_id = $getFood->getByName($_POST['food_name']);
			// $foodMenu->food_id = $getFood->food_id;
			// $foodMenu->menu_id = $_POST['menu_id'];
			// $foodMenu->insert();
			header('location:/Food/assignFood');
		}
		else{
			$this->view('Food/addFood');
		}
	}

	public function editFood($food_id){
		$food = new \app\models\Food();
		$food = $food->getById($food_id);
		if(isset($_POST['action'])){
			$filename = $this->saveFile($_FILES['pic_preview']);
			if($filename){
				unlink("images/$food->picture");
				$food->picture = $filename;
			}
			$food->food_name = $_POST['food_name'];
			$food->food_description = $_POST['food_description'];
			$food->price = $_POST['price'];
			$food->update();
			header('location:/Food/index');
		}
		else{
			$this->view('Food/editFood', $food);
		}
	}

	public function delete($food_id){
		$food = new \app\models\Food();
		$food = $food->getById($food_id);
		$food->deleteAssignFood();
		$food->is_available = 'False';
		$food->delete();
		header('location:/Food/index/');
	}

	public function viewFood($food_id){
		$food = new \app\models\Food();
		$food = $food->getById($food_id);
		$this->view('Food/viewFood', ['food'=>$food]);
	}

	public function assignFoodView(){
		
	}

	public function assignFood(){
		if(isset($_POST['action'])){
			$food = new \app\models\Food();
			$category_id = new \app\models\Category();
			$category_id = $category_id->category_id;
			$postCategory = $_POST['category_id'];
			$category_id = $postCategory;
			$assignFood = new \app\models\AssignFood();
			//where do you get food id and category id sessions?
			$assignFood->food_id = $_POST['food_id'];
			$assignFood->category_id = $category_id;
			$assignFood->insert();
			header('location:/Food/index/');
		}
		else {
			$menu = new \app\models\Category();
			$menus = $menu->getAllMenus();
			$food = new \app\models\Food();
			$foods = $food->getAllAvailable();
			$this->view('Food/assignFood', ['menus'=>$menus,'foods'=>$foods]);
		}
	}

	public function search(){
		//To find interesting publications, as a person or user, I can search for captions by search terms.
		$food = new \app\models\Food();
		$foods = $food->search($_GET['search_term']);
		$this->view('Food/index', $foods);
	}

	public function sortByPrice(){
		//To find interesting publications, as a person or user, I can search for captions by search terms.
		$food = new \app\models\Food();
		$food = $food->sortByPrice($_GET['search_term2']);
		$this->view('Food/index', $food);
	}
}